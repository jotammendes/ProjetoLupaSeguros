<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veiculo;


class VeiculoController extends Controller
{
    public function index($id)
    {
        $veiculos = Veiculo::where('veiculo_id','==',$id)->get();
    }

    public function create()
    {
        /*veiculo = Veiculo::all();

        return view('sistema.veiculo.crud', compact('veiculo'));*/
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $veiculo = Veiculo::create($data);
        
        return redirect(route('veiculo.index'))->with('success', 'Veiculo cadastrada com sucesso!');
    }


    public function show($id)
    {
        $veiculo = Veiculo::withTrashed()->find($id);

        return json_encode($veiculo);
    }


    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        
        return view('sistema.veiculo.crud', compact('veiculo'));
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::find($id);
        $data = $request->all();
        $veiculo->update($data);

        return redirect(route('veiculo.index'))->with('success', 'Veiculo atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();

        return redirect(route('veiculo.index'))->with('success', 'Veiculo desativado com sucesso!');
    }
}
