<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/products', 'ProductController@index');
Route::get('/contactus', 'HomeController@contactus');