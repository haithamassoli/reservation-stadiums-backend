<?php

namespace App\Http\Controllers;

use App\Models\Seek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SeekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($city_id)
    {
        $seeks = DB::table('seeks')->where('city_id', $city_id)->simplePaginate(10);
        return response()->json($seeks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city_id' => 'required',
            'user_id' => 'required',
            'field_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'price' => 'required',
            'image' => 'required',
            'phone' => 'required',
            'period' => 'required',
            'category' => 'required',
            'location' => 'required',
            'address' => 'required',
            'expire_at' => 'required',
            'age' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $seek = Seek::create($request->all());
        return response()->json([
            'message' => 'Seek created successfully',
            'data' => $seek
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($seek_id)
    {
        $seek = DB::table('seeks')->where('id', $seek_id)->first();
        return response()->json($seek);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seek $seek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seek $seek)
    {
        //
    }
}
