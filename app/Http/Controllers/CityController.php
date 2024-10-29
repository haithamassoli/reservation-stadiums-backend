<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cities = DB::table('cities')->get();
    return response()->json($cities);
  }
}
