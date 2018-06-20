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
    return view('layouts/search');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/account', 'UserController@index');

Route::get('/admin','AdminController@index')->middleware(['auth','admin']);
Route::get('/user/{user}/delete', 'AdminController@delete')->middleware(['auth','admin']);
Route::get('/user/{user}/toggleactive', 'AdminController@toggleActive')->middleware(['auth','admin']);
Route::get('/AdministrationSalle', 'SalleController@liste')->middleware(['auth','admin']);


Route::get('/Salle/{salle}/update', 'SalleController@toggleActive')->middleware(['auth','admin']);
Route::get('/Salle/{salle}/delete', 'SalleController@delete')->middleware(['auth','admin']);

Route::post('/CreateSalle', 'SalleController@create')->middleware(['auth','admin']);