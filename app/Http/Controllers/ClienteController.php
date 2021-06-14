<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        /* Return da view que não existe
        
        return view('sistema.cliente.index', compact('clientes'));
        */
    }

    public function create()
    {
        return view('sistema.cliente.crud');
    }

    public function store(ClienteRequest $request)
    {
        $data = $request->all();
        $cliente = Cliente::create($data);
        
        return redirect(route('cliente.index'))->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function show($id)
    {
        $cliente = Cliente::withTrashed()->find($id);

        return json_encode($cliente);
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        
        return view('sistema.cliente.crud', compact('cliente'));
    }

    public function update(ClienteRequest $request, $id)
    {
        $cliente = Cliente::find($id);
        $data = $request->all();
        $cliente->update($data);

        return redirect(route('cliente.index'))->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $cliente = cliente::find($id);
        $cliente->delete();

        return redirect(route('cliente.index'))->with('success', 'Cliente desativado com sucesso!');
    }

    public function deletados()
    {
        $clientes = cliente::onlyTrashed()->get();

        return view('sistema.cliente.deletados', compact('clientes'));
    }

    public function restaurar($id)
    {
        $cliente = cliente::onlyTrashed()->find($id);
        $cliente->restore();

        return redirect(route('cliente.deletados'))->with('success', 'Cliente restaurado com sucesso!');
    }

    public function deletar($id)
    {
        $cliente = cliente::withTrashed()->find($id);
        $cliente->forceDelete();

        return redirect(route('cliente.deletados'))->with('success', 'Cliente deletado permanentemente com sucesso!');
    }
}
