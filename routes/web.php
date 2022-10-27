<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VaccinController;
use App\Http\Controllers\SterilisationController;
use App\Http\Controllers\SimpleQRcodeController;
use App\Http\Controllers\AnimauxController;
use App\Http\Controllers\LocauxController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CandidaturesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ActionController;


use App\Models\Candidatures;

use App\Http\Controllers\PDFController;







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




// Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
   
});

Route::get('details/{idLoc}', 'App\Http\Controllers\AnimauxController@details')->name('animaux.details');

Route::resource('/animaux', AnimauxController::class);
Route::resource('/candidatures', CandidaturesController::class);
Route::resource('/locaux', LocauxController::class);
Route::resource('/departements', DepartementsController::class);
Route::resource('/associations', AssociationController::class);
Route::resource('/actions', ActionController::class);

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);










// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

