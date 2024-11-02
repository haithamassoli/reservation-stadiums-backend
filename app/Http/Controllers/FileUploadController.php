<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    public function uploadImages(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $images = [];

        foreach ($request->file('images') as $image) {
            $path = $image->store('images', 'public');
            $images[] = $path;
        }

        return response()->json(['images' => $images], 200);
    }

    public function uploadImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $path = $request->file('image')->store('', 'public');

        return response()->json(['image' => $path], 200);
    }
}
