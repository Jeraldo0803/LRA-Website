<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/admissions', function () {
    return view('admissions');
});

Route::get('/alumni', function () {
    return view('alumni');
});

Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/faculty', function () {
    return view('faculty');
});

Route::get('/history', function () {
    return view('history');
});

