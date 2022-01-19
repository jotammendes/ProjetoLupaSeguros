@extends('sistema.template.error')

@section('titulo')
  Erro 404
@endsection

@section('conteudo')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center mt-4">
                <img class="mb-4 img-error" src="{{ asset('img/error-404-monochrome.svg') }}" />
                <p class="lead">Parece que essa página não existe.</p>
                <a href="{{ route('cliente.index') }}">
                    <i class="fas fa-arrow-left mr-1"></i>
                    Retornar à página de clientes
                </a>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('style')
@endsection

@section('script')
@endsection
