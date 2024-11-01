<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = DB::table('bookings')->where('user_id', Auth::id())->simplePaginate(10);
        return response()->json($bookings);
    }

    // all field_id bookings
    public function fieldBookings($field_id, $field_size_id)
    {
        $bookings = DB::table('bookings')->where('field_id', $field_id)->where('field_size_id', $field_size_id)->get();
        return response()->json($bookings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $field_size = DB::table('field_sizes')->where('id', $request->field_size_id)->first();

        $price = $field_size->price_per_hour;
        $discount_text = '';

        if ($field_size->discount) {
            $discount_type = $field_size->discount_type;
            $discount = $field_size->discount;
            if ($discount_type == 'percentage') {
                $price -= ($price * $discount / 100);
                $discount_text = $discount . '%';
            } else {
                $price -= $discount;
                $discount_text = $discount . '$';
            }
        }

        $validator = Validator::make($request->all(), [
            'field_id' => 'required',
            'field_size_id' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
            'notes' => 'nullable',
            'payment_method' => 'nullable',
        ]);

        $request['total_price'] = $price;
        $request['discount'] = $discount_text;
        $request['user_id'] = Auth::id();

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }

        $booking = Booking::create($request->all());
        return response()->json([
            'message' => 'Booking created successfully',
            'data' => $booking
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($booking_id)
    {
        $booking = DB::table('bookings')->where('id', $booking_id)->where('user_id', Auth::id())->first();
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
