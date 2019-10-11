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

// Main controller
Route::get('/', 'HomeController@index');

Route::get('/cards', 'Cards\CardController@index');
Route::post('/cards/create', 'Cards\CardCreateController@index');
Route::get('/cards/process', 'Cards\CardProcessController@index');
Route::get('/cards/next', 'Cards\CardNextController@index');

Route::get('/phrase', 'Phrase\AnalyserController@index');
Route::post('/phrase/process', 'Phrase\ProcessController@index');