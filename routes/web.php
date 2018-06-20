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

Route::get('/', 'HomeController@index');

Route::get('/account', 'UserController@index');

Route::post('/search/post', 'SearchController@getDataLocation');

Route::get('/salle/{salle}/view', 'SalleController@index');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
