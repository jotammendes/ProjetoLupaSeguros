@extends('sistema.template.template')

@section('titulo', (isset($cliente) ? "Editar" : "Cadastrar")." Cliente")

@section('conteudo')
    <h1 class="my-4">Cliente</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Formulário de Cliente
        </div>
        <div class="card-body">
            <form id="form" action="{{ isset($cliente)? route('cliente.update', $cliente->id) : route('cliente.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if(isset($cliente))
                    @method("PUT")
                @else
                    @method("POST")
                @endif

                @component('sistema.cliente.form', [
                    'cliente' => isset($cliente)? $cliente: null,
                ])
                @endcomponent
                <div class="pt-3 d-flex justify-content-end flex-wrap-reverse">
                    <button type="submit" class="btn btn-success mr-2">{{isset($cliente)? 'Salvar': 'Criar'}} </button>
                    <a href="{{ route('cliente.index') }}" class="btn btn-secondary ml-2">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection