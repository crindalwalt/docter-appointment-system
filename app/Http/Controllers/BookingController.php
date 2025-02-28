<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use App\Models\User;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function appointment()
    {
        $product = booking::all();
        return view( 'admin.appointments',
            [
                "product" =>  $product,

            ]

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     *     $data['doctors'] = Doctor::all();
    return view('patient.doctors')->with($data);
     */
    public function dashboard()
    {
        $data['dashboard'] = user::all();
         return view("patient.dashboard")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        // TODO: bazaid will save the booking request to two tables
        // dd($request->all());
        // first save user


        // then save booking


        // then redirect
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
