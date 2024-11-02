<?php

namespace App\Http\Controllers;

use App\Models\SpecialAvailability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SpecialAvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $field_id, $field_size_id)
    {
        $field = DB::table('fields')->select("user_id")->where('id', $field_id)->first();

        if (Auth::user()->id !== $field->user_id) {
            return response()->json(['error' => 'You are not authorized to create field sizes for this field'], 401);
        }

        $validator = Validator::make($request->all(), [
            'open_time' => 'required',
            'close_time' => 'required',
            'special_date' => 'required',
        ]);

        $request['field_size_id'] = $field_size_id;

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $special_availability = SpecialAvailability::create($request->all());
        return response()->json([
            'message' => 'Special availability created successfully',
            'data' => $special_availability
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(SpecialAvailability $specialAvailability)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpecialAvailability $specialAvailability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SpecialAvailability $specialAvailability)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpecialAvailability $specialAvailability)
    {
        //
    }
}
