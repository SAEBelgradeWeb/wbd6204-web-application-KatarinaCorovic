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
Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'doctorView'])->name('doctor');
Route::get('/doctors_report', [App\Http\Controllers\DoctorsReportController::class, 'view'])->name('doctors_report');
Route::get('/patient', [App\Http\Controllers\PatientController::class, 'patientView'])->name('patient');
Route::get('/department', [App\Http\Controllers\DepartmentController::class, 'departmentView'])->name('department');

Route::get('doctors_list', 'Doctor@doctors_list');
Route::get('departments_list', 'Department@departments_list');

Route::post('/appointment', [App\Http\Controllers\AppointmentController::class, 'appointmentForm']);
Route::view("form", "appointment");


Route::post('/patient', [App\Http\Controllers\PatientController::class, 'patientForm']);
Route::view("form", "appointment");


Route::post('/doctors_report', [App\Http\Controllers\DoctorsReportController::class, 'doctorsReportForm']);
Route::view("form", "doctors_report");

