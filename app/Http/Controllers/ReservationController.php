<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all()->sortDesc();
        return view("reservation.index" , ["reservations" => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("reservation.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "seats_reserved" => "required",
            // "event_id" => "required",
            // "user_id" => "required",
        ]);
        
        $data["user_id"] = $request->user()->id;
        $data["event_id"] = 1;

        reservation::create($data);

        return to_route("reservation.index")->with("message", "Reservation created successfully !!");
    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        return view("reservation.show", ["reservation" => $reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        return view("reservation.edit", ["reservation" => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservation)
    {
        $data = $request->validate([
            "seats_reserved" => "required",
            // "event_id" => "required",
            // "user_id" => "required",
        ]);
        
        $data["user_id"] = $request->user()->id;
        $data["event_id"] = 1;

        $reservation->update($data);

        return to_route("reservation.index")->with("message", "Reservation updated successfully !!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        $reservation->delete();
        return to_route("reservation.index")->with("message", "Reservation deleted successfully !!");
    }
}
