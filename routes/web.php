<?php

//Our Counter for Videos Downloads(it tell us about count of downloaded video)
Route::get('videos/{id}', function ($id) {
//    We Namespacing our download with . and pass id to that
    $downloads = Redis::get("videos.{$id}.downloads");

    return view("Welcome", compact('downloads'));
});

//Download link
Route::get('videos/{id}/download', function ($id) {
//        Prepare Download

//    Increment Download Time
    Redis::incr("videos.{$id}.downloads");

    return back();
});




