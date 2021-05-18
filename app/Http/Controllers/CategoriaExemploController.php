<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaExemploRequest;

use App\Models\CategoriaExemplo;

class CategoriaExemploController extends Controller
{
    public function index()
    {
        $categorias = CategoriaExemplo::all();

        return view('sistema.categoria_exemplo.index', compact('categorias'));
    }

    public function create()
    {
        return view('sistema.categoria_exemplo.crud');
    }

    public function store(CategoriaExemploRequest $request)
    {
        $dados = $request->all();
        $dados['cliente_id'] = session('cliente.id');

        CategoriaExemplo::create($dados);

        return redirect(route('categoria_exemplo.index'))->with('success', 'Categoria de Exemplo criada com sucesso!');
    }

    public function edit($id)
    {
        $categoria = CategoriaExemplo::find($id);

        return view('sistema.categoria_exemplo.crud', compact('categoria'));
    }

    public function update(CategoriaExemploRequest $request, $id)
    {
        $categoria = CategoriaExemplo::find($id);
        $dados = $request->all();

        $categoria->update($dados);

        return redirect(route('categoria_exemplo.index'))->with('success', 'Categoria de Exemplo alterada com sucesso!');
    }

    public function destroy($id)
    {
        $categoria = CategoriaExemplo::find($id);

        if(count($categoria->exemplos) > 0) {
            return redirect(route('categoria_exemplo.index'))->with('danger', 'Categoria não pode ser deletada! Por favor, verifique se há Exemplos vinculados à essa categoria!');
        }
        
        $categoria->delete();
        
        return redirect(route('categoria_exemplo.index'))->with('success', 'Categoria de Componente deletada com sucesso!');
    }
}
