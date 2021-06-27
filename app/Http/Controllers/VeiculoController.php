<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veiculo;
use App\Models\Cliente;
use App\Http\Requests\VeiculoRequest;

class VeiculoController extends Controller
{
    public function index($cliente)
    {
        $veiculos = Veiculo::where('cliente_id',$cliente)->get();
        return view('sistema.veiculo.index', compact('veiculos','cliente'));
    }

    public function create($cliente)
    {
        return view('sistema.veiculo.crud',compact($cliente));
    }

    public function store(VeiculoRequest $request, $cliente)
    {
        $data = $request->all();
        $veiculo = Veiculo::create($data);
        
        return redirect(route('veiculo.index', $cliente))->with('success', 'Veiculo cadastrada com sucesso!');
    }

    public function show($id)
    {
        $veiculo = Veiculo::find($id);
        return json_encode($veiculo);
    }

    public function edit($cliente,$id)
    {
        $veiculo = Veiculo::find($id);
        
        return view('sistema.veiculo.crud', compact('veiculo','cliente'));
    }

    public function update(VeiculoRequest $request, $cliente, $id)
    {
        $veiculo = Veiculo::find($id);
        $data = $request->all();
        $veiculo->update($data);

        return redirect(route('veiculo.index',$cliente))->with('success', 'Veiculo atualizada com sucesso!');
    }

    public function destroy($cliente,$id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();

        return redirect(route('veiculo.index',$cliente))->with('success', 'Veiculo desativado com sucesso!');
    }
}
