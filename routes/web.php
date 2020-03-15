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



Route::get('/','Homecontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin','middleware'=>'admin'], function() {


    Route::group(['prefix' => 'users'], function() {

        Route::get('/','AdminController@listUsers');
        Route::post('/AddUser','AdminController@addUser');
    });


    Route::group(['prefix' => 'courses'], function() {

        Route::get('/','CourseController@index');
        Route::post('/store','CourseController@store');
    });



    Route::group(['prefix' => 'fees'], function() {

        Route::get('/','FeesController@index');
        Route::post('/store','FeesController@store');

        Route::get('/delete/{fee}','FeesController@delete');
    });

    Route::group(['prefix' => 'attendances'], function() {

        Route::get('/','AttendanceController@index');
        Route::post('/store','AttendanceController@store');
        Route::get('/details','AttendanceController@detail');
    });

    Route::group(['prefix' => 'tasks'], function() {

        Route::get('/','TaskController@index');
        Route::post('/store','TaskController@store');
    });

    Route::group(['prefix' => 'students'], function() {

        Route::get('/','StudentController@index');
        Route::post('/store','StudentController@store');
    });

});


Route::group(['middleware'=>'auth'],function(){

    Route::get('/tasks','UsersController@tasks');
    Route::get('/fees','UsersController@fees');


});

