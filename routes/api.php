<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\FieldSizeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SeekController;
use App\Http\Controllers\TournamentController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

//Authentication routes
Route::middleware('guest:sanctum')->group(function () {
  Route::post('/login', [AuthController::class, 'login']);
  Route::post('/register', [AuthController::class, 'register']);
});

// Route::prefix('email')
//     ->controller(VerifyEmailController::class)
//     ->group(function () {
//         Route::post('/verification-notification', 'notify');
//         Route::get('/verify/{id}/{hash}', 'verify')->name('verification.verify');
//     });

// Route::prefix('password')
//     ->controller(ResetPasswordController::class)
//     ->group(function () {
//         Route::post('/reset-notification', 'notify');
//         Route::post('/reset', 'reset')->name('password.update');
//     });

//User routes
Route::middleware('auth:sanctum')->group(function () {
  Route::post('/logout', [AuthController::class, 'logout']);
  Route::get('/user/bookings', [BookingController::class, 'index']);
  Route::get('/bookings/{booking_id}', [BookingController::class, 'show']);
  Route::post('/bookings', [BookingController::class, 'store']);
  Route::post('/seeks', [SeekController::class, 'store']);
  Route::post('/fields/{field_id}/reviews', [ReviewController::class, 'store']);
});

// Admin routes
Route::middleware('auth:sanctum', IsAdmin::class)->group(function () {
  Route::post('/tournaments', [TournamentController::class, 'store']);
  Route::post('/fields', [FieldController::class, 'store']);
  Route::post('/fields/{field_id}/field-sizes', [FieldSizeController::class, 'store']);
});

// Public routes
Route::get('/not-authenticated', [AuthController::class, 'notAuthenticated'])->name('login');
Route::get('/authenticated', [AuthController::class, 'authenticated'])->name('home');
Route::get('/cities', [CityController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/cities/{city_id}/fields', [FieldController::class, 'index']);
Route::get('/fields/{field_id}', [FieldController::class, 'show']);
Route::get('/fields/{field_id}/sizes', [FieldSizeController::class, 'index']);
Route::get('/advertisements', [AdvertisementController::class, 'index']);
Route::get('/cities/{city_id}/tournaments', [TournamentController::class, 'index']);
Route::get('/tournaments/{tournament_id}', [TournamentController::class, 'show']);
Route::get('/fields/{field_id}/reviews', [ReviewController::class, 'index']);
Route::get('/cities/{city_id}/academies', [AcademyController::class, 'index']);
Route::get('/academies/{academy_id}', [AcademyController::class, 'show']);
Route::get('/cities/{city_id}/seeks', [SeekController::class, 'index']);
Route::get('/seeks/{seek_id}', [SeekController::class, 'show']);
Route::get('/fields/{field_id}/field-size/{field_size_id}/availabilities/', [AvailabilityController::class, 'index']);
Route::get('fields/{field_id}/field-size/{field_size_id}/bookings', [BookingController::class, 'fieldBookings']);
  // Route::get('/users/{user_id}', [UserController::class, 'show']);