<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('cliente');
        }

        return back()->withErrors([
            'email' => 'As credenciais informadas não foram encontradas em nossos registros.',
        ]);
    }

    public function logout() {
        Auth::guard()->logout();

        return redirect(route('login'));
    }
}
