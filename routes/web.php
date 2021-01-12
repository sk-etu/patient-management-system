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


//admin panel login
Route::get('/login','Backend\UserController@login')->name('login');
Route::post('/login','Backend\UserController@loginProcess')->name('login.do');

//group
Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>['auth','checkadmin']],function (){

//dashboard
Route::get('/admin','Backend\HomeController@index')->name('dashboard');
//logout
Route::get('/logout','Backend\UserController@logout')->name('logout');


//prescription
Route::get('/prescription','Backend\PrescriptionController@prescription')->name('prescription');
Route::post('/prescription','Backend\PrescriptionController@createprescription')->name('prescription.store');
Route::get('/prescription/list','Backend\PrescriptionController@list')->name('prescription.list');
Route::get('/prescription/delete/{id}','Backend\PrescriptionController@delete')->name('prescription.delete');
Route::get('/prescription/view/{id}','Backend\PrescriptionController@view')->name('prescription.view');
//edit
Route::get('/prescription/edit/{id}','Backend\PrescriptionController@edit')->name('prescription.edit');
Route::put('/prescription/update/{id}','Backend\PrescriptionController@update')->name('prescription.update');
//search
Route::get('/prescription/search','Backend\PrescriptionController@search')->name('search');

// prescribe_medicine
Route::get('/prescribe_medicine','Backend\Prescribe_medicineController@prescribe_medicine')->name('prescribe_medicine');
Route::post('/prescribe_medicine','Backend\Prescribe_medicineController@createprescribe_medicine')->name('prescribe_medicine.store');
Route::get('/prescribe_medicine/list','Backend\Prescribe_medicineController@list')->name('prescribe_medicine.list');

//appointment
// Backend
Route::get('/appointment/list','Frontend\AppointmentController@list')->name('appointment.list');
Route::get('/appointment/view/{id}','Frontend\AppointmentController@view')->name('appointment.view');
Route::get('/appointment/delete/{id}','Frontend\AppointmentController@delete')->name('appointment.delete');
Route::get('/appointment/prescription/view/{id}','Frontend\AppointmentController@prescriptionview')->name('insert.prescription');

Route::group(['middleware'=>'isadmin'],function (){

//diagnosis
Route::get('/diagnosis','Backend\DiagnosisController@diagnosis')->name('diagnosis');
Route::post('/diagnosis','Backend\DiagnosisController@creatediagnosis')->name('diagnosis.store');
Route::get('/diagnosis/list','Backend\DiagnosisController@list')->name('diagnosis.list');
Route::get('/diagnosis/delete/{id}','Backend\DiagnosisController@delete')->name('diagnosis.delete');
Route::get('/diagnosis/view/{id}','Backend\DiagnosisController@view')->name('diagnosis.view');

//feedback
// Backend
Route::get('/feedback/list','Frontend\FeedbackController@list')->name('feedback.list');
Route::get('/feedback/view/{id}','Frontend\FeedbackController@view')->name('feedback.view');
Route::get('/feedback/delete/{id}','Frontend\FeedbackController@delete')->name('feedback.delete');


//medicine
Route::get('/medicine','Backend\MedicineController@medicine')->name('medicine');
Route::post('/medicine','Backend\MedicineController@createmedicine')->name('medicine.store');
Route::get('/medicine/list','Backend\MedicineController@list')->name('medicine.list');
Route::get('/medicine/delete/{id}','Backend\MedicineController@delete')->name('medicine.delete');
Route::get('/medicine/view/{id}','Backend\MedicineController@view')->name('medicine.view');
//edit
Route::get('/medicine/edit/{id}','Backend\MedicineController@edit')->name('medicine.edit');
Route::put('/medicine/update/{id}','Backend\MedicineController@update')->name('medicine.update');


//notification
Route::get('/notification','Backend\NotificationController@notification')->name('notification');
Route::post('/notification','Backend\NotificationController@createnotification')->name('notification.store');
Route::get('/notification/list','Backend\NotificationController@list')->name('notification.list');
Route::get('/notification/delete/{id}','Backend\NotificationController@delete')->name('notification.delete');
Route::get('/notification/view','Backend\NotificationController@view')->name('notification.view');
//edit
Route::get('/notification/edit/{id}','Backend\NotificationController@edit')->name('notification.edit');
Route::put('/notification/update/{id}','Backend\NotificationController@update')->name('notification.update');



//Registration+Patient
// Backend
Route::get('/patient/list','Frontend\RegistrationController@list')->name('patient.list');
Route::get('/patient/view/{id}','Frontend\RegistrationController@view')->name('patient.view');
Route::get('/patient/delete/{id}','Frontend\RegistrationController@delete')->name('patient.delete');
//edit
Route::get('/patient/edit/{id}','Frontend\RegistrationController@edit')->name('patient.edit');
Route::put('/patient/update/{id}','Frontend\RegistrationController@update')->name('patient.update');
//search
Route::get('/patient/search','Frontend\RegistrationController@search')->name('patient.search');

});
});
});





// Frontend
Route::group(['middleware'=>'auth'],function(){


//logout
Route::get('/customer/logout','Frontend\UserController@logout')->name('frontend.logout');

//appointment
// Frontend
Route::get('/appointment','Frontend\AppointmentController@appointment')->name('appointment');
Route::post('/appointment','Frontend\AppointmentController@createappointment')->name('appointment.store');
Route::get('/appointment/cancle/{id}','Frontend\PatientProfileController@cancle')->name('appointment.cancle');
  
//feedback
// Frontend
Route::get('/feedback','Frontend\FeedbackController@feedback')->name('feedback');
Route::post('/feedback','Frontend\FeedbackController@createfeedback')->name('feedback.store');


Route::get('/notification/view','Backend\NotificationController@view')->name('notification.view');


//patient-profile
Route::get('/profile','Frontend\PatientProfileController@profile')->name('profile');
Route::get('/profile/prescription/view/{id}','Frontend\PatientProfileController@view')->name('profile.view');


});




//Login user
Route::get('/customer/login','Frontend\UserController@login')->name('frontend.login');
Route::post('/customer/login','Frontend\UserController@loginProcess')->name('frontend.login.do');


  
// Home-About
Route::get('/home','Frontend\HomeController@index')->name('home');




//Registration+Patient
Route::get('/patient_registration','Frontend\RegistrationController@registration')->name('registration');
Route::post('/patient_registration','Frontend\RegistrationController@createregistration')->name('patient.store');

