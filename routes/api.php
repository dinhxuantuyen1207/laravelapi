<?php

use App\Http\Controllers\Api\v1\CustomerController;
use App\Http\Controllers\Api\v2\CustomerController as V2CustomerController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('',function(){
    return view('welcome');
});
// Route::resource('v1/customer',CustomerController::class)->except(['edit','create']);//Loại Link edit vs create
Route::prefix('v1')->group(function(){
    Route::resource('customer',CustomerController::class)->except(['edit','create']);//Loại Link edit vs create
});
Route::prefix('v2')->group(function(){
    Route::resource('customer',V2CustomerController::class)->only(['show']);
});
