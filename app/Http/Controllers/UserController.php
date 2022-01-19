<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::user()->id === 1) {
            $users = User::all();
            return view('sistema.user.index', compact('users'));
        } else {
            return redirect('/');
        }
        
    }

    public function create()
    {
        if(Auth::user()->id === 1) {
            return view('sistema.user.crud');
        } else {
            return redirect('/');
        }
    }

    public function store(UserRequest $request)
    {
        if(Auth::user()->id === 1) {
            $data = $request->all();
        
            if($data['password'] !== $data['confirm_password'])
                return back()->withInput()->with('danger', 'Senha não confirmada!');
            
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            
            return redirect(route('user.index'))->with('success', 'user cadastrado com sucesso!');
        } else {
            return redirect('/');
        }
    }

    public function show($id)
    {
        $user = User::withTrashed()->find($id);

        return json_encode($user);
    }

    public function edit($id)
    {
        if(Auth::user()->id === 1 || Auth::user()->id == $id) {
            $user = User::find($id);
            
            return view('sistema.user.crud', compact('user'));
        } else {
            return redirect('/');
        }
    }

    public function update(UserUpdateRequest $request, $id)
    {
        if(Auth::user()->id === 1 || Auth::user()->id == $id) {
            $user = User::find($id);
            $data = $request->all();

            $email = User::where('email', $data['email'])->first();

            // verificando email
            if($email && $email->email !== $user['email']) {
                return back()->withInput()->with('danger', 'E-mail já cadastrado!');
            }

            // verificando se campo senha foi preenchido
            if(!$data['password'] && !$data['confirm_password']) {
                unset($data['password']);
                unset($data['confirm_password']);
            } else if($data['password'] !== $data['confirm_password']) {
                
                return back()->withInput()->with('danger', 'Senha não confirmada!');
            } else {
                $data['password'] = Hash::make($data['password']);
            }

            $user->update($data);

            return redirect(route('user.index'))->with('success', 'User atualizado com sucesso!');
        } else {
            return redirect('/');
        }
    }

    public function destroy($id)
    {
        if(Auth::user()->id === 1) {
            $user = User::find($id);
            $user->delete();

            return redirect(route('user.index'))->with('success', 'User desativado com sucesso!');
        } else {
            return redirect('/');
        }
    }

    public function deletados()
    {
        if(Auth::user()->id === 1) {
            $users = User::onlyTrashed()->get();

            return view('sistema.user.deletados', compact('users'));
        } else {
            return redirect('/');
        }
    }

    public function restaurar($id)
    {
        if(Auth::user()->id === 1) {
            $user = User::onlyTrashed()->find($id);
            $user->restore();

            return redirect(route('user.deletados'))->with('success', 'User restaurado com sucesso!');
        } else {
            return redirect('/');
        }
    }

    public function deletar($id)
    {
        if(Auth::user()->id === 1) {
            $user = User::withTrashed()->find($id);
            $user->forceDelete();

            return redirect(route('user.deletados'))->with('success', 'User deletado permanentemente com sucesso!');
        } else {
            return redirect('/');
        }
    }
}
