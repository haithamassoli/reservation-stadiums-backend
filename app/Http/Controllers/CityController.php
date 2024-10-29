<?php

namespace App\Http\Controllers;

use App\Models\City;

class CityController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cities = City::all();
    return response()->json($cities);
  }
}
