<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    // Mostrar el formulario
    public function create(){
        return view('auth.register');
    }

    // Guardar usuarios en DB
    public function store(Request $request){
        // Validar datos
        $validated = $request->validate([
            'name' => 'required|string|max:80',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        // Crear usuario
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Logear al usuario automáticamente. ya puedo ejecutar operaciones coo auth::check, auth::user etc
        Auth::login($user);

        // Redirigir a dashboard
        return redirect()->route('dashboard');
    }
}