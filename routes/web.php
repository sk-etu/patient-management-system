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
Route::get('/prescription/view/{id}','Backend\PrescriptionController@view')->name('prescription.view');
//edit
Route::get('/prescription/edit/{id}','Backend\PrescriptionController@edit')->name('prescription.edit');
Route::put('/prescription/update/{id}','Backend\PrescriptionController@update')->name('prescription.update');
// prescribe_medicine
Route::get('/prescribe_medicine','Backend\Prescribe_medicineController@prescribe_medicine')->name('prescribe_medicine');
Route::post('/prescribe_medicine','Backend\Prescribe_medicineController@createprescribe_medicine')->name('prescribe_medicine.store');
Route::get('/prescribe_medicine/list','Backend\Prescribe_medicineController@list')->name('prescribe_medicine.list');







//diagnosis
Route::get('/diagnosis','Backend\DiagnosisController@diagnosis')->name('diagnosis');
Route::post('/diagnosis','Backend\DiagnosisController@creatediagnosis')->name('diagnosis.store');
Route::get('/diagnosis/list','Backend\DiagnosisController@list')->name('diagnosis.list');
Route::get('/diagnosis/delete/{id}','Backend\DiagnosisController@delete')->name('diagnosis.delete');
Route::get('/diagnosis/view/{id}','Backend\DiagnosisController@view')->name('diagnosis.view');

//medicine
Route::get('/medicine','Backend\MedicineController@medicine')->name('medicine');
Route::post('/medicine','Backend\MedicineController@createmedicine')->name('medicine.store');
Route::get('/medicine/list','Backend\MedicineController@list')->name('medicine.list');
Route::get('/medicine/delete/{id}','Backend\MedicineController@delete')->name('medicine.delete');
Route::get('/medicine/view/{id}','Backend\MedicineController@view')->name('medicine.view');


//notification
Route::get('/notification','Backend\NotificationController@notification')->name('notification');
Route::post('/notification','Backend\NotificationController@createnotification')->name('notification.store');
Route::get('/notification/list','Backend\NotificationController@list')->name('notification.list');
Route::get('/notification/delete/{id}','Backend\NotificationController@delete')->name('notification.delete');
Route::get('/notification/view','Backend\NotificationController@view')->name('notification.view');
//edit
Route::get('/notification/edit/{id}','Backend\NotificationController@edit')->name('notification.edit');
Route::put('/notification/update/{id}','Backend\NotificationController@update')->name('notification.update');



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
Route::get('/patient/view/{id}','Frontend\RegistrationController@view')->name('patient.view');
Route::get('/patient/delete/{id}','Frontend\RegistrationController@delete')->name('patient.delete');
//edit
Route::get('/patient/edit/{id}','Frontend\RegistrationController@edit')->name('patient.edit');
Route::put('/patient/update/{id}','Frontend\RegistrationController@update')->name('patient.update');



//Login
Route::get('login','Frontend\LoginController@index')->name('login');