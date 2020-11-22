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
    return view('welcome');
});

Route::get('/home','Backend\HomeController@index')->name('dashboard');


//prescription
Route::get('/prescription','Backend\PrescriptionController@prescription')->name('prescription');
Route::post('/prescription','Backend\PrescriptionController@createprescription')->name('prescription.store');
Route::get('/prescription/list','Backend\PrescriptionController@list')->name('prescription.list');


//diagnosis
Route::get('/diagnosis','Backend\DiagnosisController@diagnosis')->name('diagnosis');
Route::post('/diagnosis','Backend\DiagnosisController@creatediagnosis')->name('diagnosis.store');
Route::get('/diagnosis/list','Backend\DiagnosisController@list')->name('diagnosis.list');

//medicine
Route::get('/medicine','Backend\MedicineController@medicine')->name('medicine');
Route::post('/medicine','Backend\MedicineController@createmedicine')->name('medicine.store');
Route::get('/medicine/list','Backend\MedicineController@list')->name('medicine.list');

//appointment
Route::get('/appointment','Backend\AppointmentController@appointment')->name('appointment');
Route::post('/appointment','Backend\AppointmentController@createappointment')->name('appointment.store');
Route::get('/appointment/list','Backend\AppointmentController@list')->name('appointment.list');


//Doctor
Route::get('/doctor','Backend\DoctorController@doctor')->name('doctor');



//Patient
Route::get('/patient','Backend\PatientController@patient')->name('patient');
