<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($user_id)
    {
        $bookings = DB::table('bookings')->where('user_id', $user_id)->get();
        return response()->json($bookings);
    }

    // all field_id bookings
    public function fieldBookings($field_id)
    {
        $bookings = DB::table('bookings')->where('field_id', $field_id)->get();
        return response()->json($bookings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($booking_id)
    {
        $booking = DB::table('bookings')->where('id', $booking_id)->first();
        return response()->json($booking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
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
