<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seguradora;
use App\Http\Requests\SeguradoraRequest;

class SeguradoraController extends Controller
{
    public function index($id)
    {
        $seguradoras = Seguradora::where('veiculo_id','==',$id)->get();
    }

    public function create()
    {
        //
    }

    public function store(SeguradoraRequest $request)
    {
        $data = $request->all();
        $seguradora = Seguradora::create($data);
        
        return redirect(route('seguradora.index'))->with('success', 'Seguradora cadastrada com sucesso!');
    }


    public function show($id)
    {
        $seguradora = Seguradora::withTrashed()->find($id);

        return json_encode($seguradora);
    }


    public function edit($id)
    {
        $seguradora = Seguradora::find($id);
        
        return view('sistema.seguradora.crud', compact('seguradora'));
    }

    public function update(SeguradoraRequest $request, $id)
    {
        $seguradora = Seguradora::find($id);
        $data = $request->all();
        $seguradora->update($data);

        return redirect(route('seguradora.index'))->with('success', 'Seguradora atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $seguradora = Seguradora::find($id);
        $seguradora->delete();

        return redirect(route('seguradora.index'))->with('success', 'Seguradora desativado com sucesso!');
    }
}
