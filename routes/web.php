<?php

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

Route::get('/', 'HomeController@index'); 


Route::post('/submit', 'SurveysController@store');
Route::post('/feedback/submit', 'FeedbackController@store');

Route::get('/survey/{survey}/feedback', 'FeedbackController@create');

