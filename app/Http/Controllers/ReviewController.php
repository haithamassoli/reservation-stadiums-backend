<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($field_id)
    {
        $reviews = DB::table('reviews')->where('field_id', $field_id)->simplePaginate(10);
        return response()->json($reviews);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $field_id)
    {
        $field = DB::table('fields')->select("rating")->where('id', $field_id)->first();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'rating' => 'required',
        ]);

        // $field->rating = 2.5,10
        $rating = explode(',', $field->rating);
        $avg_rating = ($rating[0] + $request->rating) / ($rating[1] + 1) . ',' . ($rating[1] + 1);

        $request['field_id'] = $field_id;
        $request['user_id'] = Auth::id();

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        Field::where('id', $field_id)->update(['rating' => $avg_rating]);

        $review = Review::create($request->all());
        return response()->json([
            'message' => 'Review created successfully',
            'data' => $review
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
