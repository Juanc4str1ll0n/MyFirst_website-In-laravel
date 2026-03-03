<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function(){
    return view('Dashboard');
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

//Configurar las rutas de controladores register
Route::get('/register', [RegisterController::class, 'create']) -> name('register');
Route::get('/register', [RegisterController::class, 'store'])->name('register.store');

//configurar las ruta de controladores login
Route::get('/login', [LoginController::class, 'create'])->name('login');

Route::post('/login', [LoginController::class, 'store'])
-> middleware('')
->name('login.store');

//ruta para logout
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/fanpage', function(){
    return view('fanpage');
}
)->middleware('auth');

