<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome');
Route::view('microphones', 'microphones');
Route::view('headphones', 'headphones');
Route::view('audio-interfaces', 'audio-interfaces');
Route::view('webcams', 'webcams');
Route::view('lights', 'lights');
Route::view('set-ups', 'set-ups');

Route::view('purposes', 'purposes');
Route::view('purposes/podcasting', 'purposes.podcasting');
Route::view('purposes/streaming', 'purposes.streaming');
Route::view('purposes/remote-working', 'purposes.remote-working');
