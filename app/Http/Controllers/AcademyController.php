<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($city_id)
    {
        $academies = DB::table('academies')->where('city_id', $city_id)->get();
        return response()->json($academies);
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
    public function show($academy_id)
    {
        $academy = DB::table('academies')->where('id', $academy_id)->first();
        return response()->json($academy);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Academy $academy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Academy $academy)
    {
        //
    }
}
