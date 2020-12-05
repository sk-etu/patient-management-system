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

Route::get('/admin','Backend\HomeController@index')->name('dashboard');


//prescription
Route::get('/prescription','Backend\PrescriptionController@prescription')->name('prescription');
Route::post('/prescription','Backend\PrescriptionController@createprescription')->name('prescription.store');
Route::get('/prescription/list','Backend\PrescriptionController@list')->name('prescription.list');
Route::get('/prescription/delete/{id}','Backend\PrescriptionController@delete')->name('prescription.delete');
Route::get('/prescription/edit','Backend\PrescriptionController@edit')->name('prescription.edit');


//diagnosis
Route::get('/diagnosis','Backend\DiagnosisController@diagnosis')->name('diagnosis');
Route::post('/diagnosis','Backend\DiagnosisController@creatediagnosis')->name('diagnosis.store');
Route::get('/diagnosis/list','Backend\DiagnosisController@list')->name('diagnosis.list');

//medicine
Route::get('/medicine','Backend\MedicineController@medicine')->name('medicine');
Route::post('/medicine','Backend\MedicineController@createmedicine')->name('medicine.store');
Route::get('/medicine/list','Backend\MedicineController@list')->name('medicine.list');
Route::get('/medicine/delete/{id}','Backend\MedicineController@delete')->name('medicine.delete');

//appointment
// Frontend
Route::get('/appointment','Frontend\AppointmentController@appointment')->name('appointment');
Route::post('/appointment','Frontend\AppointmentController@createappointment')->name('appointment.store');
// Backend
Route::get('/appointment/list','Frontend\AppointmentController@list')->name('appointment.list');


//Doctor
Route::get('/doctor','Backend\DoctorController@doctor')->name('doctor');


// Frontend
// Home-About
Route::get('/home','Frontend\HomeController@index')->name('home');
Route::get('/about','Frontend\HomeController@about')->name('about');

//Registration+Patient
Route::get('/patient_registration','Frontend\RegistrationController@registration')->name('registration');
Route::post('/patient_registration','Frontend\RegistrationController@createregistration')->name('patient.store');
// Backend
Route::get('/patient/list','Frontend\RegistrationController@list')->name('patient.list');

//Login
Route::get('login','Frontend\LoginController@index')->name('login');