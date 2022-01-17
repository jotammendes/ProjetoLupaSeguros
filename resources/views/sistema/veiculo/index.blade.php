@extends('sistema.template.template')

@section('titulo')
    Veículo
@endsection

@section('conteudo')
    <h1 class="my-4">Veículo</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabela de Veículos
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('veiculo.create', ['cliente_id' => $cliente_id]) }}">Novo Veículo</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Descrição do Veículo</th>
                            <th>Ano</th>
                            <th>Nº de Seguradoras</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Descrição do Veículo</th>
                            <th>Ano</th>
                            <th>Nº de Seguradoras</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($veiculos as $veiculo)
                        <tr>
                            <td>{{ $veiculo->descricao_veiculo }}</td>
                            <td>{{ $veiculo->ano }}</td>
                            <td>{{ $veiculo->seguradoras()->count() }}</td>
                            <td>
                                <a class="btn btn-info" href="#modalDetalhes" data-toggle="modal" data-url="{{ route('veiculo.show', ['cliente_id' => $cliente_id, 'veiculo' => $veiculo->id])}}">Detalhes</a>
                                <a class="btn btn-warning text-white" href="{{ route('veiculo.edit', ['veiculo' => $veiculo->id, 'cliente_id' => $cliente_id]) }}">Editar</a>
                                <a class="btn btn-secondary" href="{{ route('seguradora.index', $veiculo->id) }}">Seguradoras</a>
                                <a class="btn btn-info" href="{{ route('veiculo.relatorio', ['veiculo' => $veiculo->id, 'cliente_id' => $cliente_id]) }}" target="_blank">Relatório</a>
                                <a class="btn btn-danger" href="#modalExcluir" data-toggle="modal" data-url="{{ route('veiculo.destroy', ['cliente_id' => $cliente_id, 'veiculo' => $veiculo->id])}}">Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Detalhes -->
    <div id="modalDetalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Veículo</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="descricao_veiculo">Descrição do Veículo</label>
                            <input type="text" id="detalhes-descricao_veiculo" name="descricao_veiculo" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="chassi">Chassi</label>
                            <input type="text" id="detalhes-chassi" name="chassi" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="placa">Placa</label>
                            <input type="text" id="detalhes-placa" name="placa" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ano">Ano</label>
                            <input type="text" id="detalhes-ano" name="ano" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="combustivel">Combustivel</label>
                            <input type="text" id="detalhes-combustivel" name="combustivel" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alienado">Alienado</label>
                            <input type="text" id="detalhes-alienado" name="alienado" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fator_de_ajuste">Fator de Ajuste</label>
                            <input type="text" id="detalhes-fator_de_ajuste" name="fator_de_ajuste" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="valor_de_referencia">Valor de Referência</label>
                            <input type="text" id="detalhes-valor_de_referencia" name="valor_de_referencia" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cep_de_pernoite">CEP de Pernoite</label>
                            <input type="text" id="detalhes-cep_de_pernoite" name="cep_de_pernoite" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="garagem_na_residencia">Garagem na Residência</label>
                            <input type="text" id="detalhes-garagem_na_residencia" name="garagem_na_residencia" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="garagem_no_trabalho">Garagem no Trabalho</label>
                            <input type="text" id="detalhes-garagem_no_trabalho" name="garagem_no_trabalho" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="garagem_no_local_de_estudo">Garagem no Local de Estudo</label> 
                            <input type="text" id="detalhes-garagem_no_local_de_estudo" name="garagem_no_local_de_estudo" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo_de_uso">Tipo de Uso</label> 
                            <input type="text" id="detalhes-tipo_de_uso" name="tipo_de_uso" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reside_com_menores_de_26_anos">Reside com Menores de 26 anos</label> 
                            <input type="text" id="detalhes-reside_com_menores_de_26_anos" name="reside_com_menores_de_26_anos" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="veiculos_na_residencia">Veiculos na Residência</label> 
                            <input type="text" id="detalhes-veiculos_na_residencia" name="veiculos_na_residencia" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="km_mensal">KM Mensal</label> 
                            <input type="text" id="detalhes-km_mensal" name="km_mensal" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo_de_residencia">Tipo de Residência</label> 
                            <input type="text" id="detalhes-tipo_de_residencia" name="tipo_de_residencia" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="distancia_ate_o_trabalho">Distância ate o Trabalho</label> 
                            <input type="text" id="detalhes-distancia_ate_o_trabalho" name="distancia_ate_o_trabalho" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Excluir-->
    <div id="modalExcluir" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Veiculo</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div align="center" class="modal-body">Tem certeza que deseja excluir este Veículo?</div>
                <div class="modal-footer">
                    <form id="excluir" method="POST" enctype="multipart/form-data" name="excluir">
                        @csrf
                        @method('DELETE')
                        <button type="submit" form="excluir" class="btn btn-danger">Excluir</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
@endsection

@section('script')
    
    <script>
        $(document).ready(() => {
            $('#modalDetalhes').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)

                $.getJSON(button.data('url'),(resposta) => {
                    $('#detalhes-descricao_veiculo').val(resposta.descricao_veiculo);
                    $('#detalhes-chassi').val(resposta.chassi);
                    $('#detalhes-placa').val(resposta.placa);
                    $('#detalhes-ano').val(resposta.ano);
                    $('#detalhes-combustivel').val(resposta.combustivel);
                    $('#detalhes-alienado').val(resposta.alienado);
                    $('#detalhes-fator_de_ajuste').val(resposta.fator_de_ajuste_formatado);
                    $('#detalhes-valor_de_referencia').val(resposta.valor_de_referencia_formatado);
                    $('#detalhes-cep_de_pernoite').val(resposta.cep_de_pernoite);
                    $('#detalhes-garagem_na_residencia').val(resposta.garagem_na_residencia);
                    $('#detalhes-garagem_no_trabalho').val(resposta.garagem_no_trabalho);
                    $('#detalhes-garagem_no_local_de_estudo').val(resposta.garagem_no_local_de_estudo);
                    $('#detalhes-tipo_de_uso').val(resposta.tipo_de_uso);
                    $('#detalhes-reside_com_menores_de_26_anos').val(resposta.reside_com_menores_de_26_anos);
                    $('#detalhes-veiculos_na_residencia').val(resposta.veiculos_na_residencia);
                    $('#detalhes-km_mensal').val(resposta.km_mensal);
                    $('#detalhes-tipo_de_residencia').val(resposta.tipo_de_residencia);
                    $('#detalhes-distancia_ate_o_trabalho').val(resposta.distancia_ate_o_trabalho);
                    
                });
            })

            $('#modalExcluir').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                console.log(event);

                this.querySelector("form#excluir").action = button.data('url')
            })
        });
    </script>
@endsection