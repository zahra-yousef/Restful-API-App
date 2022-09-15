<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student',[ApiController::class, 'create']);
Route::get('/students',[ApiController::class, 'show']);
Route::get('/student/{id}',[ApiController::class, 'showById']);
Route::put('/studentupdate/{id}',[ApiController::class, 'update']);
Route::delete('/studnetdelete/{id}',[ApiController::class, 'destroy']);