<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth'])->group(function () {
    //要驗證才能訪問的路由
    Route::resource('flights', \App\Http\Controllers\FlightController::class);
    Route::resource('sicks', \App\Http\Controllers\SickController::class);
    Route::resource('hotels', \App\Http\Controllers\HotelController::class);
    Route::resource('Company', CompanyController::Class);

});