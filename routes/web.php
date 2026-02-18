<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/a380', function () {
    return view('a380');
});

Route::get('/a320', function () {
    return view('a320');
});

Route::get('/a350', function () {
    return view('a350');
});

Route::get('/b747', function () {
    return view('b747');
});

Route::get('/b777', function () {
    return view('b777');
});



