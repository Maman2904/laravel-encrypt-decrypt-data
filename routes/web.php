<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostDataController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[HomeController::class,'home']);
Route::post('home/create',[HomeController::class,'store']);

Route::get('postDataEnc',[PostDataController::class,'create']);
Route::post('postData/encrypt',[PostDataController::class,'store']);
Route::get('postDataDec',[PostDataController::class,'createfile']);
Route::post('postData/decrypt',[PostDataController::class,'storefile']);

Route::get('users',[HomeController::class,'users']);