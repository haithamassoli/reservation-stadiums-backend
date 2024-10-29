<?php

namespace App\Http\Controllers;

use App\Models\FieldSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FieldSizeController extends Controller
{
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
    public function show($fieldId)
    {
        $fieldSize = DB::table('field_sizes')->where('field_id', $fieldId)->get();
        return response()->json($fieldSize);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FieldSize $fieldSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FieldSize $fieldSize)
    {
        //
    }
}
