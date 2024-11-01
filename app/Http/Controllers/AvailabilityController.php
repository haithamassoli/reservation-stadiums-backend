<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request)
    {
        //
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
