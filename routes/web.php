<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimauxController;
use App\Http\Controllers\LocauxController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CandidaturesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartementsController;
use App\Models\Candidatures;

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

Route::get('/', function () {
    return view('layout');
});

Route::resource('/animaux', AnimauxController::class);
Route::resource('/candidatures', CandidaturesController::class);
Route::resource('/locaux', LocauxController::class);
Route::resource('/departements', DepartementsController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');