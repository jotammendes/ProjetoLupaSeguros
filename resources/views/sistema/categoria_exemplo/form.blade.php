<div class="row flex-wrap">
    <div class="col-md-6">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="{{ isset($categoria)? $categoria->titulo: old('titulo')}}" class="form-control" required>
        </div>
    </div>
</div>