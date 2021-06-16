<div class="row flex-wrap">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ isset($cliente)? $cliente->nome: old('nome')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" value="{{ isset($cliente)? $cliente->cpf: old('cpf')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="{{ isset($cliente)? $cliente->data_nascimento: old('data_nascimento')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="estado_civil">Estado Civil</label>
            <input type="text" id="estado_civil" name="estado_civil" value="{{ isset($cliente)? $cliente->estado_civil: old('estado_civil')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="genero">Genero</label>
            <input type="text" id="genero" name="genero" value="{{ isset($cliente)? $cliente->genero: old('genero')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ isset($cliente)? $cliente->telefone: old('telefone')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="{{ isset($cliente)? $cliente->email: old('email')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="seguradora_anterior">Seguradora Anterior</label>
            <input type="text" id="seguradora_anterior" name="seguradora_anterior" value="{{ isset($cliente)? $cliente->seguradora_anterior: old('seguradora_anterior')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="preco_anterior">Preço Anterior</label>
            <input type="number" step="0.01" name="preco_anterior" value="{{ isset($cliente)? $cliente->preco_anterior: old('preco_anterior')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="bonus">Bonus</label>
            <input type="number" step="1" id="bonus" name="bonus" value="{{ isset($cliente)? $cliente->bonus: old('bonus')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="vigencia_entrada">Vigência Entrada</label>
            <input type="date" id="vigencia_entrada" name="vigencia_entrada" value="{{ isset($cliente)? $cliente->vigencia_entrada: old('vigencia_entrada')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="vigencia_saida">Vigência Saida</label>
            <input type="date" id="vigencia_saida" name="vigencia_saida" value="{{ isset($cliente)? $cliente->vigencia_saida: old('vigencia_saida')}}" class="form-control">
        </div>
    </div>        
</div>