@extends('sistema.template.template')

@section('titulo', (isset($seguradora) ? "Editar" : "Cadastrar")." Seguradora")

@section('conteudo')
    <h1 class="my-4">Seguradora</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Formulário de Seguradora
        </div>
        <div class="card-body">
            <form id="form" action="{{ isset($seguradora)? route('seguradora.update', ['veiculo_id' => $veiculo_id, 'seguradora' => $seguradora->id]) : route('seguradora.store', ['veiculo_id' => $veiculo_id]) }}" method="post" enctype="multipart/form-data">
                @csrf

                @if(isset($seguradora))
                    @method("PUT")
                @else
                    @method("POST")
                @endif

                @component('sistema.seguradora.form', [
                    'seguradora' => isset($seguradora)? $seguradora: null,
                ])
                @endcomponent
                <div class="pt-3 d-flex justify-content-end flex-wrap-reverse">
                    <button type="submit" class="btn btn-success mr-2">{{isset($seguradora)? 'Salvar': 'Criar'}} </button>
                    <a href="{{ route('seguradora.index', $veiculo_id) }}" class="btn btn-secondary ml-2">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection