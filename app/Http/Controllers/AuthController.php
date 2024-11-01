<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'email' => 'required|email',
        'password' => 'required',
      ]
    );

    if ($validator->fails()) {
      return response()->json([
        'message' => $validator->errors()->first()
      ], 400);
    }

    if (!Auth::attempt($request->only('email', 'password'))) {
      return response()->json([
        'message' => 'Incorrect email address or password.'
      ], 401);
    }

    $user = User::where('email', $request->email)->first();

    return response()->json([
      'user' => $user,
      'token' => $user->createToken('football5545')->plainTextToken,
      'message' => 'User logged in successfully.'
    ]);
  }

  public function register(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'name' => 'required|string',
        'email' => 'email|required|unique:users',
        'password' => 'required|min:8',
        'phone' => 'required|numeric:min:10:max:10:unique:users',
      ]
    );

    if ($validator->fails()) {
      return response()->json([
        'message' => $validator->errors()->first()
      ], 400);
    }

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'phone' => $request->phone,
    ]);

    return response()->json([
      'user' => $user,
      'token' => $user->createToken('football5545')->plainTextToken,
      'message' => 'User registered successfully.'
    ]);
  }

  public function logout(Request $request)
  {

    $request->user()->tokens()->delete();

    return response()->json([
      'message' => 'User logged out successfully.'
    ]);
  }

  public function notAuthenticated()
  {
    return response()->json([
      'message' => 'User not authenticated.'
    ], 401);
  }

  public function authenticated()
  {
    return response()->json([
      'message' => 'User is authenticated.'
    ]);
  }
}
