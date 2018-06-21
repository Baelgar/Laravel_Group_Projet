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

//Route::get('/account', function () {
//    return view('layouts/account');
//});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account', 'UserController@index');
Route::post('/{user}/updateInfos','UserController@updateInfos');
Route::get('/reservations/rapports','RapportController@index');
Route::get('/{reservation}/generatePDF','RapportController@generatePDF');

