<?php

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/appointment', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointment');

Route::post('/appointment', [App\Http\Controllers\AppointmentController::class, 'getData']);
Route::view("form", "appointment");
