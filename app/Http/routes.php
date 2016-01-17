<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//duong dan den form them user


Route::get('user/dangnhap','UserController@dangnhap');

//duong dan khi submit form them
Route::post('user/dangnhap','UserController@storedn');


Route::get('user/create','UserController@create');


Route::post('user/create','UserController@store');
 
//duong dan den list user

Route::get('user','UserController@index');


//duong dan den form edit user
Route::get('user/{id}/edit','UserController@edit');

//duong dan khi submit edit
Route::post('user/update','UserController@update');


//duong dan khi delete user
Route::get('user/{id}/delete', 'UserController@destroy');

