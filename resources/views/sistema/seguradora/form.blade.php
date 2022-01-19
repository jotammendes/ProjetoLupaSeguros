<div class="row flex-wrap">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="nome">Nome da Seguradora</label>
            <input type="text" id="nome" name="nome" value="{{ isset($seguradora)? $seguradora->nome: old('nome')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="proposta">Proposta</label>
            <input type="text" id="proposta" name="proposta" value="{{ isset($seguradora)? $seguradora->proposta: old('proposta')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" step="0.01" id="valor" name="valor" value="{{ isset($seguradora)? $seguradora->valor: old('valor')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="detalhe_do_valor">Detalhes do Valor</label>
            <input type="text" id="detalhe_do_valor" name="detalhe_do_valor" value="{{ isset($seguradora)? $seguradora->detalhe_do_valor: old('detalhe_do_valor')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="franquia">Franquia</label>
            <input type="number" step="0.01" id="franquia" name="franquia" value="{{ isset($seguradora)? $seguradora->franquia: old('franquia')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="cobertura">Cobertura</label>
            <input type="text" id="cobertura" name="cobertura" value="{{ isset($seguradora)? $seguradora->cobertura: old('cobertura')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="danos_materiais">Danos Materiais</label>
            <input type="number" step="0.01" name="danos_materiais" value="{{ isset($seguradora)? $seguradora->danos_materiais: old('danos_materiais')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="danos_corporais">Danos Corporais</label>
            <input type="number" step="0.01" name="danos_corporais" value="{{ isset($seguradora)? $seguradora->danos_corporais: old('danos_corporais')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="danos_morais">Danos Morais</label>
            <input type="number" step="0.01" id="danos_morais" name="danos_morais" value="{{ isset($seguradora)? $seguradora->danos_morais: old('danos_morais')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="morte_invalidez">Morte Invalidez</label>
            <input type="number" step="0.01" id="morte_invalidez" name="morte_invalidez" value="{{ isset($seguradora)? $seguradora->morte_invalidez: old('morte_invalidez')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="vidros">Vidros</label>
            <input type="text" id="vidros" name="vidros" value="{{ isset($seguradora)? $seguradora->vidros: old('vidros')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="carro_reserva">Carro Reserva</label>
            <input type="text" id="carro_reserva" name="carro_reserva" value="{{ isset($seguradora)? $seguradora->carro_reserva: old('carro_reserva')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="assistencia">Assistência</label>
            <input type="text" id="assistencia" name="assistencia" value="{{ isset($seguradora)? $seguradora->assistencia: old('assistencia')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="observacoes">Observações</label>
            <input type="text" id="observacoes" name="observacoes" value="{{ isset($seguradora)? $seguradora->observacoes: old('observacoes')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" id="foto" name="foto" value="{{ isset($seguradora)? $seguradora->foto: old('foto')}}" class="form-control">
            @isset($seguradora)
                <img src="{{ $seguradora->foto }}" alt="{{ $seguradora->nome }}" style="width: 100%; max-height: 300px; object-fit: contain">
            @endif
        </div>
    </div>        
</div>
