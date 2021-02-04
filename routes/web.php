<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',"HomeController@index");
Route::get('/create',"HomeController@create");
Route::post('/input',"HomeController@input");
Route::get('/delete/{id}',"HomeController@delete");
Route::get('/edit/{id}',"HomeController@edit");
Route::post('/update',"HomeController@update");