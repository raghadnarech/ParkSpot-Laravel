<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ZonesController;
use App\Http\Controllers\WalletsController;
use App\Http\Controllers\BookController;

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

Route::post('addusers',[UsersController::class,'store']);
Route::post('addcars',[CarsController::class,'store']);
Route::post('deletecar/{id}',[CarsController::class,'destroy']);
Route::get('getallzone',[ZonesController::class,'index']);
Route::post('allcars_user',[CarsController::class,'getcars_user']);
Route::post('Login',[UsersController::class,'Login']);
Route::post('book',[BookController::class,'book_park']);
Route::post('calc_book/{id}',[BookController::class,'calculate_parkTime']);
Route::get('getamount/{id}',[WalletsController::class,'show']);
Route::post('withdraw',[WalletsController::class,'withdraw']);
Route::post('deposit',[WalletsController::class,'deposit']);