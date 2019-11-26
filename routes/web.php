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

// Route to Homepage
Route::view('/', 'home');

// Route to Info page
Route::view('/info', 'info');


// Route to Admin page
Route::get('/admin', 'AdminController@index');


// Route to Agenda page
Route::get('/agenda', 'AgendaController@index');
// Route to Agenda page with selected event name
Route::get('/agenda/{event_name}', 'AgendaController@showEvent');

// Route to Contact page
Route::get('/contact', 'ContactController@index');
