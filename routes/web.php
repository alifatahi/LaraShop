<?php

//Index
Route::get('/', 'HomeController@index')->name('home');


Route::get('shop', 'HomeController@getShop')->name('shop');
Route::get('contact', 'HomeController@getContact')->name('contact');

Auth::routes();


//Admin
Route::get('admin', 'AdminController@index')->name('admin');
Route::post('admin/add_product', 'AdminController@store')->name('add_product');

