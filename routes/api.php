<?php

use App\Http\Controllers\Api\GuestController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('students', StudentController::class);
Route::apiResource('guests', GuestController::class);
Route::apiResource('reservations', ReservationController::class);
Route::get('reservations/{reservation}/pdf', [ReservationController::class, 'generate']);
