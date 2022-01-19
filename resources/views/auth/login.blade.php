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

            <form method="POST" action="{{ route('authenticate') }}">
              @csrf

              <div class="form-group">
                <label class="small mb-1" for="email">Email</label>
                <input class="form-control py-4" id="email" name="email" type="email" placeholder="Informe seu email" required />
              </div>
              <div class="form-group">
                <label class="small mb-1" for="password">Password</label>
                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Informe sua senha" required />
              </div>
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <a class="small" href="password.html">Esqueceu sua senha?</a>
                <button class="btn btn-primary" type="submit">Login</button>
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
