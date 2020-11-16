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