<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($field_id, $field_size_id)
    {
        // availabilities inner join field_sizes on field_sizes.id = availabilities.field_size_id
        $availabilities = DB::table('availabilities')
            ->join('field_sizes', 'field_sizes.id', '=', 'availabilities.field_size_id')
            ->select('availabilities.*')
            ->where('field_sizes.field_id', $field_id)
            ->where('field_sizes.id', $field_size_id)
            ->get();
        return response()->json($availabilities);
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
            'day_of_week' => 'required',
            'open_time' => 'required',
            'close_time' => 'required',
        ]);

        $request['field_size_id'] = $field_size_id;

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $availability = Availability::create($request->all());
        return response()->json([
            'message' => 'Availability created successfully',
            'data' => $availability
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Availability $availability)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Availability $availability)
    {
        //
    }
}
