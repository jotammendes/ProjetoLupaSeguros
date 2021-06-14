<div class="row flex-wrap">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ isset($user)? $user->nome: old('nome')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="{{ isset($user)? $user->email: old('email')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control" {{ isset($user)? '': 'required'}}>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="confirm_password">Confirmar Senha</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" {{ isset($user)? '': 'required'}}>
        </div>
    </div>
</div>