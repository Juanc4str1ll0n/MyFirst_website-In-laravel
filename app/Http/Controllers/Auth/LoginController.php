<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     // Mostrar formulario de login
    public function create()
    {
        return view('auth.login'); // Asegúrate de que exista resources/views/auth/login.blade.php
    }
}