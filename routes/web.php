<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccinController;
use App\Http\Controllers\SterilisationController;
use App\Http\Controllers\SimpleQRcodeController;
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
    return view('layout');
});
Route::get("simple-qrcode", "SimpleQRcodeController@generate")->name('simple-qrcode.generate');
Route::get('details/{vaccin_id}', 'App\Http\Controllers\SterilisationController@details')->name('sterilisations.details');
Route::resource("sterilisations",SterilisationController::class);
Route::resource("vaccins", VaccinController::class);
Route::resource("simple-qrcode", SimpleQRcodeController::class);
