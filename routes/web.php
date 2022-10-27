<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AssociationController;

use App\Http\Controllers\AnimauxController;
use App\Http\Controllers\LocauxController;

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
Route::resource("/associations", AssociationController::class);

Route::get('/', function () {
    return view('layout');
    
});

Route::get('/', function () {
    return view('layout');
});

Route::resource('/animaux', AnimauxController::class);

Route::resource('/locaux', LocauxController::class);
