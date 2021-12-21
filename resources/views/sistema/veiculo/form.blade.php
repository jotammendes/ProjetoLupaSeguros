<div class="row flex-wrap">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="descricao_veiculo">Descricao Veículo</label>
            <input type="text" id="descricao_veiculo" name="descricao_veiculo" value="{{ isset($veiculo)? $veiculo->descricao_veiculo: old('descricao_veiculo')}}" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="chassi">Chassi</label>
            <input type="text" id="chassi" name="chassi" value="{{ isset($veiculo)? $veiculo->chassi: old('chassi')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" id="placa" name="placa" value="{{ isset($veiculo)? $veiculo->placa: old('placa')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" step="1" id="ano" name="ano" value="{{ isset($veiculo)? $veiculo->ano: old('ano')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="combustivel">Tipo de Combustível</label>
            <input type="text" id="combustivel" name="combustivel" value="{{ isset($veiculo)? $veiculo->combustivel: old('combustivel')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="alienado">Alienado</label>
            <input type="text" id="alienado" name="alienado" value="{{ isset($veiculo)? $veiculo->alienado: old('alienado')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="fator_de_ajuste">Fator de Ajuste</label>
            <input type="number" step="0.01" name="fator_de_ajuste" value="{{ isset($veiculo)? $veiculo->fator_de_ajuste: old('fator_de_ajuste')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="valor_de_referencia">Valor de Referência</label>
            <input type="number" step="0.01" name="valor_de_referencia" value="{{ isset($veiculo)? $veiculo->valor_de_referencia: old('valor_de_referencia')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="cep_de_pernoite">CEP de Pernoite</label>
            <input type="text" id="cep_de_pernoite" name="cep_de_pernoite" value="{{ isset($veiculo)? $veiculo->cep_de_pernoite: old('cep_de_pernoite')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="garagem_na_residencia">Garagem na Residência</label>
            <input type="garagem_na_residencia" id="garagem_na_residencia" name="garagem_na_residencia" value="{{ isset($veiculo)? $veiculo->garagem_na_residencia: old('garagem_na_residencia')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="garagem_no_trabalho">Garagem no Trabalho</label>
            <input type="text" id="garagem_no_trabalho" name="garagem_no_trabalho" value="{{ isset($veiculo)? $veiculo->garagem_no_trabalho: old('garagem_no_trabalho')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="garagem_no_local_de_estudo">Garagem no Local de Estudo</label>
            <input type="text" id="garagem_no_local_de_estudo" name="garagem_no_local_de_estudo" value="{{ isset($veiculo)? $veiculo->garagem_no_local_de_estudo: old('garagem_no_local_de_estudo')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="tipo_de_uso">Tipo de Uso</label>
            <input type="text" id="tipo_de_uso" name="tipo_de_uso" value="{{ isset($veiculo)? $veiculo->tipo_de_uso: old('tipo_de_uso')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="reside_com_menores_de_26_anos">Reside com Menores de 26 Anos</label>
            <input type="text" id="reside_com_menores_de_26_anos" name="reside_com_menores_de_26_anos" value="{{ isset($veiculo)? $veiculo->reside_com_menores_de_26_anos: old('reside_com_menores_de_26_anos')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="veiculos_na_residencia">Veículos na Residência</label>
            <input type="text" id="veiculos_na_residencia" name="veiculos_na_residencia" value="{{ isset($veiculo)? $veiculo->veiculos_na_residencia: old('veiculos_na_residencia')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="km_mensal">Km Mensal</label>
            <input type="number" step="0.01" id="km_mensal" name="km_mensal" value="{{ isset($veiculo)? $veiculo->km_mensal: old('km_mensal')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="tipo_de_residencia">Tipo de Residência</label>
            <input type="text" id="tipo_de_residencia" name="tipo_de_residencia" value="{{ isset($veiculo)? $veiculo->tipo_de_residencia: old('tipo_de_residencia')}}" class="form-control">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label for="distancia_ate_o_trabalho">Distância até o Trabalho</label>
            <input type="number" step="0.01" id="distancia_ate_o_trabalho" name="distancia_ate_o_trabalho" value="{{ isset($veiculo)? $veiculo->distancia_ate_o_trabalho: old('distancia_ate_o_trabalho')}}" class="form-control">
        </div>
    </div>        
</div>
