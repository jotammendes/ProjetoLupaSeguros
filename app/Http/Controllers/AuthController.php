<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'Usuário não encontrado em nossos registros!',
        ]);
    }

    public function forgot_password() {
        return view('auth.password');
    }

    public function reset_password(Request $request) {
        $data = $request->all();
        $user = User::where('email', $data['email'])->first();

        // Verificando se usuário existe
        if($user){
            // verificando se campo senha foi preenchido
            if(!$data['password'] && !$data['confirm_password']) {
                return back()->withInput()->with('danger', 'Preencha os todos campos!');
            } else if($data['password'] !== $data['confirm_password']) {
                return back()->withInput()->with('danger', 'Senha não confirmada!');
            } else {
                $user['password'] = Hash::make($data['password']);
                $user->save();

                return redirect(route('login'));
            }
        } else {
            return back()->withInput()->with('danger', 'Usuário não encontrado em nossos registros!');
        }
    }

    public function logout() {
        Auth::guard()->logout();

        return redirect(route('login'));
    }
}
