<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

//Rutas de controladores register
Route::get('/register', [RegisterController::class, 'create']) -> name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//Rutas de controladores login
Route::get('/login', [LoginController::class, 'create'])->name('login');

Route::post('/login', [LoginController::class, 'store'])
-> middleware('')
->name('login.store');

//ruta para logout
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');


