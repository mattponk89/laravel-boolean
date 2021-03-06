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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/corso', 'CorsoController@index')->name('corso');

Route::get('/carriere', 'CarriereController@index')->name('carriere');

Route::get('/lezione', 'LezioneController@index')->name('lezione');

Route::get('/utenti', 'UtentiController@index')->name('utenti');

Route::get('/utenti/{id}', 'UtentiController@show')->name('utente');

