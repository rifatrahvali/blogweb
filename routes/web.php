<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// v3 Service Provider ile değiştirdik
// Route::get('/anasayfa','HomeController@index');

Route::get('/', function () {
    return view('front.index');
});


