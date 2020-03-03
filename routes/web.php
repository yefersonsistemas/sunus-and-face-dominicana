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
Route::get('/', function() {
    return redirect()->route('inicio');
})->name('inicio');

Route::get('inicio', 'PagesController@inicio')->name('inicio');

Route::get('doctores', 'PagesController@doctores')->name('doctores');

Route::get('servicios', 'PagesController@servicios')->name('servicios');

Route::get('sedes', 'PagesController@sedes')->name('sedes');

Route::get('alianzas', 'PagesController@alianzas')->name('alianzas');

Route::get('sobre', 'PagesController@sobre')->name('sobre');

Route::get('asesoriaonline', 'PagesController@asesoriaonline')->name('asesoriaonline');

Route::get('proximamente', 'PagesController@proximamente')->name('proximamente');

Route::get('sedenaco', 'PagesController@sedenaco')->name('sedenaco');

Route::get('sedevergel', 'PagesController@sedevergel')->name('sedevergel');

Route::get('doctormiembro/{id}', 'PagesController@doctormiembro')->name('doctormiembro');

Route::get('directivauno/{id}', 'PagesController@directivauno')->name('directivauno');

Route::get('horario', 'PagesController@horario')->name('horario');

Route::get('calendario', 'PagesController@calendario')->name('calendario');

