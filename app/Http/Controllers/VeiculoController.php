<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veiculo;
use App\Models\Cliente;
use App\Http\Requests\VeiculoRequest;

class VeiculoController extends Controller
{
    public function index($cliente_id)
    {
        $veiculos = Veiculo::where('cliente_id',$cliente_id)->get();
        return view('sistema.veiculo.index', compact('veiculos','cliente_id'));
    }

    public function create($cliente_id)
    {
        return view('sistema.veiculo.crud', compact('cliente_id'));
    }

    public function store(VeiculoRequest $request, $cliente_id)
    {
        $data = $request->all();
        $data['cliente_id'] = $cliente_id;
        $veiculo = Veiculo::create($data);
        
        return redirect(route('veiculo.index', $cliente_id))->with('success', 'Veiculo cadastrado com sucesso!');
    }

    public function show($cliente_id, $id)
    {
        $veiculo = Veiculo::find($id);
        return json_encode($veiculo);
    }

    public function edit($cliente_id, $id)
    {
        $veiculo = Veiculo::find($id);
        
        return view('sistema.veiculo.crud', compact('veiculo','cliente_id'));
    }

    public function update(VeiculoRequest $request, $cliente_id, $id)
    {
        $veiculo = Veiculo::find($id);
        $data = $request->all();
        $veiculo->update($data);

        return redirect(route('veiculo.index', $cliente_id))->with('success', 'Veiculo atualizado com sucesso!');
    }

    public function destroy($cliente_id, $id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();

        return redirect(route('veiculo.index', $cliente_id))->with('success', 'Veiculo excluído com sucesso!');
    }

    public function relatorio($cliente_id, $id) {
        $cliente = Cliente::find($cliente_id);
        $veiculo = Veiculo::find($id);
        $seguradoras = $veiculo->seguradoras;

        $data = date('d/m/Y H:i:s');

        return view('sistema.veiculo.relatorio', compact('cliente', 'veiculo', 'seguradoras', 'data'));
    }
}
