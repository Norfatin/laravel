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

Route::get('/', 'StudentController@index');

Route::get('/test', 'TestController@index');

Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/user/{id}', function ($id) {
    return "Your ID is ".$id;
});