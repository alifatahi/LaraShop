<?php

Route::get('/', function () {
//    Get all Hashes
//    return Redis::hgetall('user.1.stats');

//    Put Cache "Key" , "Value" , Time of cache
    Cache::put('foo', ['name' => 'Ali', 'age' => 3], 10);

    return Cache::get('foo');
});

// For Increment Favorite for User 1
//Route::get('favorite-video', function () {
////    increment
//    Redis::hincrby('user.1.stats', 'favorites', 1);
//
//    return redirect('/');
//
//});


////Our Counter for Videos Downloads(it tell us about count of downloaded video)
//Route::get('videos/{id}', function ($id) {
////    We Namespacing our download with . and pass id to that
//    $downloads = Redis::get("videos.{$id}.downloads");
//
//    return view("Welcome", compact('downloads'));
//});
//
////Download link
//Route::get('videos/{id}/download', function ($id) {
////        Prepare Download
//
////    Increment Download Time
//    Redis::incr("videos.{$id}.downloads");
//
//    return back();
//});




