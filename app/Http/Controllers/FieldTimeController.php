<?php

namespace App\Http\Controllers;

use App\Models\FieldTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FieldTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($fieldId)
    {
        $fieldTimes = DB::table('field_times')->where('field_id', $fieldId)->get();
        return response()->json($fieldTimes);
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
    public function update(Request $request, FieldTime $fieldTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FieldTime $fieldTime)
    {
        //
    }
}
