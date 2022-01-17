<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veiculo;
use App\Models\Seguradora;
use App\Http\Requests\SeguradoraRequest;
use Illuminate\Support\Facades\Storage;

class SeguradoraController extends Controller
{
    public function index($veiculo_id)
    {
        $seguradoras = Seguradora::where('veiculo_id', $veiculo_id)->get();
        $veiculo = Veiculo::find($veiculo_id);
        $cliente_id = $veiculo->cliente_id;

        return view('sistema.seguradora.index', compact('seguradoras', 'veiculo_id', 'cliente_id'));
    }

    public function create($veiculo_id)
    {
        $veiculo = Veiculo::find($veiculo_id);
        $cliente_id = $veiculo->cliente_id;

        return view('sistema.seguradora.crud', compact('veiculo_id', 'cliente_id'));
    }

    public function store(SeguradoraRequest $request, $veiculo_id)
    {
        $data = $request->all();

        $data['veiculo_id'] = $veiculo_id;
        $data['foto'] = '/storage/' . $request->file('foto')->store('seguradora','public');
        $seguradora = Seguradora::create($data);
        
        return redirect(route('seguradora.index', $veiculo_id))->with('success', 'Seguradora cadastrada com sucesso!');
    }

    public function show($veiculo_id, $id)
    {
        $seguradora = Seguradora::find($id);
        return json_encode($seguradora);
    }

    public function edit($veiculo_id, $id)
    {
        $seguradora = Seguradora::find($id);
        $veiculo = Veiculo::find($veiculo_id);
        $cliente_id = $veiculo->cliente_id;
        
        return view('sistema.seguradora.crud', compact('seguradora','veiculo_id', 'cliente_id'));
    }

    public function update(SeguradoraRequest $request, $veiculo_id, $id)
    {
        $seguradora = Seguradora::find($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            //Excluindo foto antiga
            $path = substr($seguradora->foto, 9);
            Storage::delete('public/'.$path);
            //adicionando a nova foto
            $data['foto'] = '/storage/' . $request->file('foto')->store('seguradora','public');
        }
        $seguradora->update($data);

        return redirect(route('seguradora.index', $veiculo_id))->with('success', 'Seguradora atualizada com sucesso!');
    }

    public function destroy($veiculo_id, $id)
    {
        $seguradora = Seguradora::find($id);
        $path = substr($seguradora->foto, 9);
        Storage::delete('public/'.$path);
        $seguradora->delete();

        return redirect(route('seguradora.index', $veiculo_id))->with('success', 'Seguradora excluída com sucesso!');
    }

    public function recomendar($veiculo_id, $id)
    {
        $seguradoras = Veiculo::find($veiculo_id)->seguradoras;

        foreach($seguradoras as $seguradora) {
            if($seguradora->id == $id) {
                $seguradora->recomendado = true;
            }
            else {
                $seguradora->recomendado = false;
            }
            $seguradora->save();
        }

        return redirect(route('seguradora.index', $veiculo_id))->with('success', 'Seguradora recomendada com sucesso!');
    }

    public function escolher($veiculo_id, $id)
    {
        $seguradoras = Veiculo::find($veiculo_id)->seguradoras;

        foreach($seguradoras as $seguradora) {
            if($seguradora->id == $id) {
                $seguradora->escolhido = true;
            }
            else {
                $seguradora->escolhido = false;
            }
            $seguradora->save();
        }

        return redirect(route('seguradora.index', $veiculo_id))->with('success', 'Seguradora escolhida com sucesso!');
    }
}
