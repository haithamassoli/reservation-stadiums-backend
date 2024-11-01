<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($city_id)
    {
        $tournaments = DB::table('tournaments')->where('city_id', $city_id)->simplePaginate(10);
        return response()->json($tournaments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city_id' => 'required',
            'field_id' => 'required',
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'discount_type' => 'required',
            'image' => 'required',
            'phone' => 'required',
            'period' => 'required',
            'category' => 'required',
            'location' => 'required',
            'address' => 'required',
            'expire_at' => 'required',
            'age' => 'required'
        ]);

        $request['user_id'] = Auth::id();

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $tournament = Tournament::create($request->all());
        return response()->json([
            'message' => 'Tournament created successfully',
            'data' => $tournament
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($tournament_id)
    {
        $tournament = DB::table('tournaments')->where('id', $tournament_id)->first();
        return response()->json($tournament);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
