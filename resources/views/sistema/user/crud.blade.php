@extends('sistema.template.template')

@section('titulo', (isset($user) ? "Editar" : "Cadastrar")." Usuário")

@section('conteudo')
    <h1 class="my-4">Usuário</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Formulário de Usuário
        </div>
        <div class="card-body">
            <form id="form" action="{{ isset($user)? route('user.update', $user->id) : route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if(isset($user))
                    @method("PUT")
                @else
                    @method("POST")
                @endif

                @component('sistema.user.form', [
                    'user' => isset($user)? $user: null
                ])
                @endcomponent
                <div class="pt-3 d-flex justify-content-end flex-wrap-reverse">
                    <button type="submit" class="btn btn-success mr-2">{{isset($user)? 'Salvar': 'Criar'}} </button>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary ml-2">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection