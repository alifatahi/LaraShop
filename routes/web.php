<?php

//Index
Route::get('/', 'HomeController@index')->name('home');


Route::get('shop', 'HomeController@getShop')->name('shop');
Route::get('contact', 'HomeController@getContact')->name('contact');

Auth::routes();


