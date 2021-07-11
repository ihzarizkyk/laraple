<?php

use Illuminate\Support\Facades\Route;

Route::get('/',"HomeController@index");
Route::get('/create',"HomeController@create");
Route::post('/store',"HomeController@store");
Route::get('/delete/{id}',"HomeController@delete");
Route::get('/edit/{laraple:slug}',"HomeController@edit");
Route::post('/update',"HomeController@update");
Route::get('/show/{slug}',"HomeController@show");

// Auth Routes

Route::get("/register","AuthController@register");
Route::get("/login","AuthController@login");
Route::post("/postregister","AuthController@postregister");
Route::post("/postlogin","AuthController@postlogin");
Route::get("/logout","AuthController@logout");