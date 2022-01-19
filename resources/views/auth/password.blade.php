@extends('sistema.template.auth')

@section('titulo')
  Login
@endsection

@section('conteudo')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
          <div class="card-header p-0">
            <img width="100%" src="{{ asset('img/logo-com-fundo.png') }}" alt="Logo da LuPa Seguros">
          </div>
          <div class="card-body">
            @component('sistema.componente.alertas')
            @endcomponent

            <form method="POST" action="{{ route('reset_password') }}">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label class="small mb-1" for="email">Email</label>
                <input class="form-control py-4" id="email" name="email" type="email" placeholder="Informe seu email" required />
              </div>
              <div class="form-group">
                <label class="small mb-1" for="password">Nova Senha</label>
                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Informe sua nova senha" required />
              </div>
              <div class="form-group">
                <label class="small mb-1" for="confirm_password">Confirmar Nova Senha</label>
                <input class="form-control py-4" id="confirm_password" name="confirm_password" type="confirm_password" placeholder="Confirme sua nova senha" required />
              </div>
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <a class="small" href="{{ route('login') }}">Voltar para login</a>
                <button class="btn btn-primary" type="submit">Alterar Senha</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('style')
@endsection

@section('script')
@endsection
