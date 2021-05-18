<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExemploRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Exemplo;

class ExemploController extends Controller
{
    public function index()
    {
        $exemplos = Exemplo::all();

        return view('sistema.exemplo.index', compact('exemplos'));
    }

    public function create()
    {
        return view('sistema.exemplo.crud');
    }

    public function store(ExemploRequest $request)
    {
        $data = $request->all();

        $data['imagem'] = $request->file('imagem')->store('exemplo','public');
        $exemplo = Exemplo::create($data);
        
        return redirect(route('exemplo.index'))->with('success', 'Exemplo cadastrado com sucesso!');
    }

    public function show($id)
    {
        $exemplo = Exemplo::withTrashed()->find($id);
        $exemplo->categoria;

        return json_encode($exemplo);
    }

    public function edit($id)
    {
        $exemplo = Exemplo::find($id);

        return view('sistema.exemplo.crud', compact('exemplo'));
    }

    public function update(Request $request, $id)
    {
        $exemplo = Exemplo::find($id);
        $data = $request->all();

        //Verificando se o arquivo de foto é valido
        if ($request->hasFile('imagem')) {
            Storage::delete('public/'.$exemplo->imagem);
            $data['imagem'] = $request->file('imagem')->store('exemplo','public');
        }
        $exemplo->update($data);

        return redirect(route('exemplo.index'))->with('success', 'Exemplo cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        $exemplo = Exemplo::find($id);
        $exemplo->delete();

        return redirect(route('exemplo.index'))->with('success', 'Exemplo desativado com sucesso!');
    }

    public function deletados()
    {
        $exemplos = Exemplo::onlyTrashed()->get();

        return view('sistema.exemplo.deletados', compact('exemplos'));
    }

    public function restaurar($id)
    {
        $exemplo = Exemplo::onlyTrashed()->find($id);
        $exemplo->restore();

        return redirect(route('exemplo.deletados'))->with('success', 'Exemplo restaurado com sucesso!');
    }

    public function deletar($id)
    {
        $exemplo = Exemplo::withTrashed()->find($id);
        Storage::delete('public/exemplo'.$exemplo->photo);
        $exemplo->forceDelete();

        return redirect(route('exemplo.deletados'))->with('success', 'Exemplo deletado permanentemente com sucesso!');
    }
}
