<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// v3 Service Provider ile değiştirdik
// Route::get('/anasayfa','HomeController@index');

Route::get('/', 'HomeController@index')->name("home");
Route::get('/about', 'HomeController@about')->name("about");
Route::get('/contact', 'HomeController@contact')->name("contact");

