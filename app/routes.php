<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/history', 'HistoryController@index');
Route::get('/about', 'AboutController@index');
Route::get('/medical-examination', 'MedicalExaminationController@index');
Route::get('/medical-examination', 'MedicalExaminationController@standardExamination');
Route::get('/medical-examination', 'MedicalExaminationController@complexManExamination');
Route::get('/medical-examination', 'MedicalExaminationController@complexWomanExamination');
Route::get('/medical-examination', 'MedicalExaminationController@complexOncoExamination');
Route::get('/medical-examination', 'MedicalExaminationController@complexRheumaExamination');
Route::get('/medical-examination', 'MedicalExaminationController@complexAllergyExamination');
Route::get('/medical-examination', 'MedicalExaminationController@pregnantExamination');
