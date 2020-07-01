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

Route::get('/', "NewsController@index");


Route::get('aboutUs', function () {
    return view('aboutUs');

});

// Route::get('feedback', function () {
//     return view('feedback');
// });

Route::resource('feedback','FeedbackController');
Route::post('feedback','FeedbackController@store');


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
// Route::get('/','PagesController@index') ;
Route::get('/news','PagesController@news') ;
Route::get('/about','PagesController@about') ;
Route::get('/healthcarelocations','PagesController@healthcarelocations');

//Covid Tracker

Route::get('/covidTracker', 'covidTrackerController@index');
