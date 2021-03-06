<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('login', function () {
    return view('login');
});

Route::get('profile', function () {
    return view('profile');
});
Route::get('posts', function () {
    return view('posts');
});
Route::get('search', function () {
    return view('search');
});
