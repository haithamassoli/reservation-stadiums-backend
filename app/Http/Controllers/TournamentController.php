<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //
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
