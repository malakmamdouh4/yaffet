<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


// call last prices of all metals from provider ( metal_api )
Route::get('/saveLastPrice',[AdminController::class,'saveLastPrice']);

// call historical for all metals
Route::get('/saveHistMetals/{metalName}',[AdminController::class,'saveHistMetals']);

// handleSendNotification by using job
Route::get('/send_notification',[AdminController::class,'handleSendNotification']);

// call prices for all countries ( currency )
Route::get('/saveLastCurrency',[AdminController::class,'saveLastCurrency']);


