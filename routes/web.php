<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/a380', function () {
    return view('airplanes/a380');
});

Route::get('/a320', function () {
    return view('airplanes/a320');
});

Route::get('/a350', function () {
    return view('airplanes/a350');
});

Route::get('/b737', function () {
    return view('airplanes/b737');
});

Route::get('/b747', function () {
    return view('airplanes/b747');
});

Route::get('/b777', function () {
    return view('airplanes/b777');
});

Route::get('/atr72', function () {
    return view('airplanes/atr72');
});

Route::get('/embraer', function () {
    return view('airplanes/embraer');
});

Route::get('/beluga', function () {
    return view('airplanes/beluga');
});