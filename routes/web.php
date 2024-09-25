<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// v3 Service Provider ile değiştirdik
// Route::get('/anasayfa','HomeController@index');

Route::get('/', 'HomeController@index')->name("home");
Route::get('/about', 'HomeController@about')->name("about");
Route::get('/contact', 'ContactController@showForm')->name("contact");
Route::post('/contact', 'ContactController@contact');
// Route::post('/contact/{id}', 'ContactController@user')->name("user");
Route::post('/contact/{id}/{name?}', 'ContactController@user')
    ->name("user")
    //->where("id", "[0-9]+")
    ->where(["id"=>"[0-9]+","name"=>"[a-z]+"]);
// hem post hem get
// Route::match(['get','post'],'/support-form','SupportFormController@support')->name('support-form.support');