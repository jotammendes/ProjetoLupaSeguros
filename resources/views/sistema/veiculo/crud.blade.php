@extends('sistema.template.template')

@section('titulo', (isset($veiculo) ? "Editar" : "Cadastrar")." Veiculo")

@section('conteudo')
    <h1 class="my-4">Veiculo</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Formulário de Veiculo
        </div>
        <div class="card-body">
            <form id="form" action="{{ isset($veiculo)? route('veiculo.update', ['cliente'=>$cliente,'id'=>$veiculo->id]) : route('veiculo.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if(isset($veiculo))
                    @method("PUT")
                @else
                    @method("POST")
                @endif

                @component('sistema.veiculo.form', [
                    'veiculo' => isset($veiculo)? $veiculo: null,
                ])
                @endcomponent
                <div class="pt-3 d-flex justify-content-end flex-wrap-reverse">
                    <button type="submit" class="btn btn-success mr-2">{{isset($veiculo)? 'Salvar': 'Criar'}} </button>
                    <a href="{{ route('veiculo.index',$cliente) }}" class="btn btn-secondary ml-2">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection