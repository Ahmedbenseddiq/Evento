<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categoryId = $request->query('category_id');

        $events = Event::when($categoryId, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })->orderBy('created_at', 'desc')->get();

        $categories = category::all();
        // dd($events);
        return view("event.index", ['events' => $events], ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('event.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request); 
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'place' => 'required',
            'seats_number' => 'required',
            'category_id' => 'required',

        ]);

        $data['user_id'] = $request->user()->id;
        // $data['category_id'] = 1;

        event::create($data);
        return to_route('event.index')->with('message', 'Event created successfully !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        return view('event.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        if ($event->user_id != request()->user()->id) {
            abort(403);
        }
        $categories = category::all();
        return view('event.edit', ['event' => $event, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, event $event)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'place' => 'required',
            'seats_number' => 'required',
            'category_id' => 'required',

        ]);

        $data['user_id'] = $request->user()->id;
        // $data['category_id'] = 1;

        $event->update($data);
        return to_route('event.index')->with('message', 'Event updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(event $event)
    {
        $event->delete();
        return to_route('event.index')->with('message', 'Event deleted successfully !!');
    }
}
