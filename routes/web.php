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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin','middleware'=>'admin'], function() {


    Route::group(['prefix' => 'users'], function() {

        Route::get('/','AdminController@listUsers');
        Route::post('/AddUser','AdminController@addUser');
    });
});
