<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('sistema.user.index', compact('users'));
    }

    public function create()
    {
        return view('sistema.user.crud');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        
        if($data['password'] !== $data['confirm_password'])
            return back()->withInput()->with('danger', 'Senha não confirmada!');
        
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        
        return redirect(route('user.index'))->with('success', 'user cadastrado com sucesso!');
    }

    public function show($id)
    {
        $user = User::withTrashed()->find($id);

        return json_encode($user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        
        return view('sistema.user.crud', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
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
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('user.index'))->with('success', 'User desativado com sucesso!');
    }

    public function deletados()
    {
        $users = User::onlyTrashed()->get();

        return view('sistema.user.deletados', compact('users'));
    }

    public function restaurar($id)
    {
        $user = User::onlyTrashed()->find($id);
        $user->restore();

        return redirect(route('user.deletados'))->with('success', 'User restaurado com sucesso!');
    }

    public function deletar($id)
    {
        $user = User::withTrashed()->find($id);
        $user->forceDelete();

        return redirect(route('user.deletados'))->with('success', 'User deletado permanentemente com sucesso!');
    }
}
