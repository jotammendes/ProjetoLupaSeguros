<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExemploRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Exemplo;
use App\Models\CategoriaExemplo;

class ExemploController extends Controller
{
    public function index()
    {
        $exemplos = Exemplo::get();

        return view('sistema.exemplo.index', compact('exemplos'));
    }

    public function create()
    {
        $categorias = CategoriaExemplo::all();

        return view('sistema.exemplo.crud', compact('categorias'));
    }

    public function store(ExemploRequest $request)
    {
        $data = $request->all();
        $data['imagem'] = '/storage/' . $request->file('imagem')->store('exemplo','public');
        $exemplo = Exemplo::create($data);
        
        return redirect(route('exemplo.index'))->with('success', 'Exemplo cadastrado com sucesso!');
    }

    public function show($id)
    {
        $exemplo = Exemplo::withTrashed()->find($id);

        return json_encode($exemplo);
    }

    public function edit($id)
    {
        $exemplo = Exemplo::find($id);
        $categorias = CategoriaExemplo::all();

        return view('sistema.exemplo.crud', compact('exemplo', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $exemplo = Exemplo::find($id);
        $data = $request->all();

        //Verificando se o arquivo de foto é valido
        if ($request->hasFile('imagem')) {
            Storage::delete('public/' . substr($exemplo->imagem, 9));
            $data['imagem'] = '/storage/' . $request->file('imagem')->store('exemplo','public');
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
        Storage::delete('public/' . substr($exemplo->imagem, 9));
        $exemplo->forceDelete();

        return redirect(route('exemplo.deletados'))->with('success', 'Exemplo deletado permanentemente com sucesso!');
    }
}
