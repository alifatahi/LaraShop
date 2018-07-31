<?php

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/saveForLater/{product}', 'CartController@saveForLater')->name('cart.saveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/cart/moveToCart/{product}', 'SaveForLaterController@moveToCart')->name('cart.moveToCart');


Route::get('empty', function () {
    Cart::instance('saveForLater')->destroy();
});

Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
