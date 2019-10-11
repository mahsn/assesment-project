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

Route::get('/pokercalculator', 'Cards\CardController@index');
Route::post('/pokercalculator/create', 'Cards\CardCreateController@index');
Route::get('/pokercalculator/process', 'Cards\CardProcessController@index');
Route::get('/pokercalculator/next', 'Cards\CardNextController@index');

Route::get('/phraseanalyser', 'Phrase\AnalyserController@index');
Route::post('/phraseanalyser/process', 'Phrase\ProcessController@index');