<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Exibe a tela de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Processa o login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/tasks'); // Redireciona para a página de tarefas após login
        }

        return back()->with('error', 'Credenciais inválidas');
    }

    // Realiza logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
