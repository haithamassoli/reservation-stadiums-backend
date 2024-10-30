<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($city_id)
    {
        $field = DB::table('fields')->where('city_id', $city_id)->simplePaginate(10);
        return response()->json($field);
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
    public function show($field_id)
    {
        $field = DB::table('fields')->where('id', $field_id)->first();
        return response()->json($field);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Field $field)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Field $field)
    {
        //
    }
}
