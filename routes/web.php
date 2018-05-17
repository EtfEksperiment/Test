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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('experiment', 'ExperimentController');
Route::resource('task', 'TaskController');
Route::resource('research', 'ResearchController');
Route::resource('participant', 'ParticipantController');
Auth::routes();

Route::get('/home', 'ResearchController@index');


Route::get('/research/{research}/experiments', 'ResearchExperimentsController@index')->name('research.experiments');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/research/{research}/tasks', 'ResearchController@getTasks')->name('research.tasks');
