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

Route::view('/', 'welcome');
Route::view('/tasks/1', 'tasks.1');
Route::view('/tasks/2', 'tasks.2');
Route::view('/tasks/3', 'tasks.3');
Route::view('/tasks/4', 'tasks.4');
Route::view('/tasks/5', 'tasks.5');
Route::view('/tasks/6', 'tasks.6');
Route::view('/tasks/7', 'tasks.7');
Route::view('/tasks/8', 'tasks.8');

Route::get('/task2', 'BidsController@index');
Route::get('/task3', 'EventsController@task3');
Route::get('/task4', 'EventsController@task4');
Route::get('/task5', 'EventsController@task5');
