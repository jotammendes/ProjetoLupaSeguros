<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        /* Return da view que não existe
        
        return view('sistema.user.index', compact('users'));
        */
    }

    public function create()
    {
        return view('sistema.user.crud');
    }

    public function store(Request $request)
    {
        $data = $request->all();
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

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $data = $request->all();
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
