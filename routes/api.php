<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\UserController;
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
Route::get('/url','controller@function') -> middleware('cors');
Route::middleware('api')->group(function () {
    Route::resource('users', UserController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('contacts', ContactFormController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('bikes', BikeController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('rides', RideController::class);
});
