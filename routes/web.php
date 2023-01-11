<?php

use App\Http\Controllers\Api\v1\BaiVietController;
use App\Http\Controllers\Api\v1\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//sssss
Route::get('/',[HomeController::class,'index']);
Route::get('/bai-viet/{id}',[BaiVietController::class,'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\LoginController::class, 'index'])->name('home');

//aaaa
Route::get('/tim-kiem',[HomeController::class,'search']);
Route::get('/test',[HomeController::class,'test']);
