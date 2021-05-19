@extends('sistema.template.template')

@section('titulo', (isset($categoria) ? "Editar" : "Cadastrar")." Exemplo")

@section('conteudo')
    <h1 class="my-4">Exemplo</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Formulário de Exemplo
        </div>
        <div class="card-body">
            <form id="form" action="{{ isset($exemplo)? route('exemplo.update', $exemplo->id) : route('exemplo.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if(isset($exemplo))
                    @method("PUT")
                @else
                    @method("POST")
                @endif

                @component('sistema.exemplo.form', [
                    'exemplo' => isset($exemplo)? $exemplo: null,
                    'categorias' => $categorias
                ])
                @endcomponent
                <div class="pt-3 d-flex justify-content-end flex-wrap-reverse">
                    <button type="submit" class="btn btn-success mr-2">{{isset($exemplo)? 'Salvar': 'Criar'}} </button>
                    <a href="{{ route('exemplo.index') }}" class="btn btn-secondary ml-2">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection