<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Authentication\ResetPasswordController;
use App\Http\Controllers\Authentication\VerifyEmailController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\FieldSizeController;
use App\Http\Controllers\FieldTimeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Authentication routes
// Route::post('/login', LoginController::class);
// Route::post('/register', RegisterController::class);

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
Route::middleware('auth:sanctum')
  ->group(function () {
    // Route::post('/logout', LogoutController::class);
    // Route::patch('/users/{user}/avatar', [UserController::class, 'uploadAvatar']);
    // Route::apiResource('users', UserController::class);
    Route::get(
      '/users/{user_id}/bookings',
      [BookingController::class, 'index']
    );
    Route::get(
      '/bookings/{booking_id}',
      [BookingController::class, 'show']
    );
  });


// Public routes
Route::get('/cities', [CityController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/cities/fields/{city_id}', [FieldController::class, 'index']);
Route::get('/fields/{field_id}', [FieldController::class, 'show']);
Route::get('/fields/sizes/{field_id}', [FieldSizeController::class, 'index']);
Route::get('/fields/times/{field_id}', [FieldTimeController::class, 'index']);
Route::get('/advertisements', [AdvertisementController::class, 'index']);
// Route::get('/cities/games/{city_id}', [GameController::class, 'index']);
// Route::get('/games/{game_id}', [GameController::class, 'show']);
// Route::get('/cities/championships/{city_id}', [ChampionshipController::class, 'index']);
// Route::get('/championships/{championship_id}', [ChampionshipController::class, 'show']);
// Route::get('/users/{user_id}', [UserController::class, 'show']);