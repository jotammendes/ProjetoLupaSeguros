@extends('sistema.template.error')

@section('titulo')
  Erro 500
@endsection

@section('conteudo')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="text-center mt-4">
          <h1 class="display-1">500</h1>
          <p class="lead">Ops, parece que algo deu errado.</p>
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
