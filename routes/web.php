<?php

use App\Http\Controllers\comment;
use App\Http\Controllers\post;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('comment', comment::class);
Route::resource('post', post::class);
Route::resource('user', user::class);
