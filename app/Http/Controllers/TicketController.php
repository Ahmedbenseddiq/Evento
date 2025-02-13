<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = ticket::all()->sortDesc();
        return view ("ticket.index", ["tickets"=> $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("ticket.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "reservation_id" => "required",
        ]);

        $ticket = ticket::create($data);
        return to_route("category.index")->with("message", "Ticket created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(ticket $ticket)
    {
        return view ("ticket.show", ["ticket"=> $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        return view ("ticket.edit", ["ticket"=> $ticket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticket $ticket)
    {
        $data = $request->validate([
            "reservation_id" => "required",
        ]);

        $$ticket->update($data);
        return to_route("category.index")->with("message", "Ticket updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticket $ticket)
    {
        $ticket->delete();
        return to_route("category.index")->with("message", "Ticket deleted successfully");
    }
}
