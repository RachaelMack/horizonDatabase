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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/daily', function () {
    return view('daily');
});

Route::get('/attendance', function () {
    return view('attendance');
});

Route::get('/isp', function () {
    return view('isp');
});

Route::get('/goals', function () {
    return view('goals');
});

Route::get('/employment', function () {
    return view('employment');
});

Route::get('/managerial', function () {
    return view('managerial');
});

Route::get('/admissions', function () {
    return view('admissions');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/organizations', function () {
    return view('organizations');
});
