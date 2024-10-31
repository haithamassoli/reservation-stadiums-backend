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
    public function index(Request $request, $city_id)
    {
        //   #requestUri: "/api/cities/fields/1?category=1&tags=7x7&price=asc&hours=2h&rating=desc"

        if (count($request->query()) > 0) {

            $query = Field::query();

            // Filter by category
            if ($request->has('category')) {
                $query->where('category_id', $request->category);
            }

            // Filter by tags
            if ($request->has('tags')) {
                $query->where('tags', 'like', '%' . $request->tags . '%');
            }

            //  Sort by price
            if ($request->has('price')) {
                $query->orderBy('min_price', 'asc');
            }

            // Sort by rating
            if ($request->has('rating')) {
                $query->orderBy('rating', 'desc');
            }

            // Filter by hours availability
            if ($request->has('hours')) {
                $query->where('hours_type', 'like', '%' . $request->hours . '%');
            }

            // return $query->get();
            return response()->json($query->where('city_id', $city_id)->simplePaginate(10));
        } else {
            $field = DB::table('fields')->where('city_id', $city_id)->simplePaginate(10);
            return response()->json($field);
        }
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
