@extends('sistema.template.template')

@section('titulo', (isset($categoria) ? "Editar" : "Cadastrar")." Categoria de Exemplo")

@section('conteudo')
    <h1 class="my-4">Categoria de Exemplo</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Formulário de Categoria de Exemplo
        </div>
        <div class="card-body">
            <form id="form" action="{{ isset($categoria)? route('categoria_exemplo.update', $categoria->id) : route('categoria_exemplo.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if(isset($categoria))
                    @method("PUT")
                @else
                    @method("POST")
                @endif

                @component('sistema.categoria_exemplo.form', [
                    'categoria' => isset($categoria)? $categoria: null
                ])
                @endcomponent
                <div class="pt-3 d-flex justify-content-end flex-wrap-reverse">
                    <button type="submit" class="btn btn-success mr-2">{{isset($categoria)? 'Salvar': 'Criar'}} </button>
                    <a href="{{ route('categoria_exemplo.index') }}" class="btn btn-secondary ml-2">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection