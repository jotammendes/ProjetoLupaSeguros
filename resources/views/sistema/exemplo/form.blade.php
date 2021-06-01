<div class="row flex-wrap">
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" id="imagem" name="imagem" value="{{ old('imagem') }}" class="form-control" accept="image/*" {{ isset($exemplo)? '': 'required'}} >
            @if(isset($exemplo))
            <img src="{{ asset($exemplo->imagem) }}" alt="Imagem Exemplo">
            @endif
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ isset($exemplo)? $exemplo->nome: old('nome')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <label for="categoria_id">Categoria</label>
        <select id="categoria_id" di="categoria_id" name="categoria_id" class="form-control" required>
            <option value="" {{ isset($exemplo)? '': 'selected' }}  disabled> Selecione uma categoria </option>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}" {{ isset($exemplo) ? (old('categoria_id') == $categoria->id) ? : 'selected' : '' }}>{{$categoria->titulo}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" step="1" id="quantidade" name="quantidade" value="{{ isset($exemplo)? $exemplo->quantidade: old('quantidade')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" step="0.01" name="valor" value="{{ isset($exemplo)? $exemplo->valor: old('valor')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="data">Data</label>
            <input type="datetime-local" id="data" name="data" value="{{ isset($exemplo)? $exemplo->data: old('data')}}" class="form-control" required>
        </div>
    </div>
</div>