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
Route::get('/', 'HomeController@index')->name('home');

// Route to Info page
Route::view('/info', 'homepage.info')->name('info');


// Route to Admin page
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin-logout');
// Route to admin page events
Route::get('/admin/evenementen', 'AdminController@showEvenementen')->name('admin-evenementen');
// Route to admin page add events
Route::get('/admin/evenementen/toevoegen', 'AdminController@addEvenementen')->name('admin-toevoegen');
Route::post('/admin/evenementen/toevoegen', 'AdminController@storeEvenementen')->name('admin-store');

// Route to Agenda page
Route::get('/agenda', 'AgendaController@showEvenementen')->name('agenda');
// Route to Agenda page with selected event name
Route::get('/agenda/{id}', 'AgendaController@showEvent')->name('agenda-details');

// Route to Contact page
Route::get('/contact', 'ContactController@index')->name('contact');

Auth::Routes();