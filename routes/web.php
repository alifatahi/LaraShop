<?php

//Index
Route::get('/', function () {
    return view('front.home');
});

Route::get('shop', 'HomeController@getShop');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
