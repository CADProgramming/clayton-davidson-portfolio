<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/week1', function () {
    return view('week1');
});

Route::get('/week2', function () {
    return view('week1');
});

Route::get('/week3', function () {
    return view('week1');
});

Route::get('/week4', function () {
    return view('week1');
});

Route::get('/week5', function () {
    return view('week1');
});

Route::get('/week6', function () {
    return view('week1');
});

Route::get('/weeks', function () {
    return view('weekscontents');
});

Route::get('/weeks/{week}', 'WeekController@show');
