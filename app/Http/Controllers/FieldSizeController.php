<?php

namespace App\Http\Controllers;

use App\Models\FieldSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FieldSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($field_id)
    {
        $fieldSize = DB::table('field_sizes')->where('field_id', $field_id)->get();
        return response()->json($fieldSize);
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
