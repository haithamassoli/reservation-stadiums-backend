<?php

namespace App\Http\Controllers;

use App\Models\FieldSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request, $field_id)
    {
        $field = DB::table('fields')->select("user_id")->where('id', $field_id)->first();

        if (Auth::user()->id !== $field->user_id) {
            return response()->json(['error' => 'You are not authorized to create field sizes for this field'], 401);
        }

        $validator = Validator::make($request->all(), [
            'size' => 'required',
            'price_per_hour' => 'required',
            'discount' => 'nullable',
            'expires_at' => 'nullable',
            'discount_type' => 'nullable',
        ]);

        $request['field_id'] = $field_id;

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $field_size = FieldSize::create($request->all());
        return response()->json([
            'message' => 'Field size created successfully',
            'data' => $field_size
        ], 200);
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
