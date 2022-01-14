@extends('sistema.template.template')

@section('titulo')
    Seguradora
@endsection

@section('conteudo')
    <h1 class="my-4">Seguradora</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabela de Seguradoras
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('seguradora.create', ['veiculo_id' => $veiculo_id]) }}">Nova Seguradora</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Foto</th>
                            <th>Recomendado</th>
                            <th>Escolhido</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Foto</th>
                            <th>Recomendado</th>
                            <th>Escolhido</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($seguradoras as $seguradora)
                        <tr style="background-color: {{ $seguradora->escolhido ? '#b5d1ff': ($seguradora->recomendado ? '#cfffd0': '') }}">
                            <td>{{ $seguradora->nome }}</td>
                            <td>{{ $seguradora->valor }}</td>
                            <td><a href="{{ $seguradora->foto }}" target="_blank"><img src="{{ $seguradora->foto }}" alt="{{ $seguradora->nome }}" height="60px"></a></td>
                            <td class="{{ $seguradora->recomendado ? 'text-success': 'text-danger' }}">{{ $seguradora->recomendado ? 'Sim': 'Não' }}</td>
                            <td class="{{ $seguradora->escolhido ? 'text-success': 'text-danger' }}">{{ $seguradora->escolhido ? 'Sim': 'Não' }}</td>
                            <td>
                                <a class="btn btn-info" href="#modalDetalhes" data-toggle="modal" data-url="{{ route('seguradora.show', ['veiculo_id' => $veiculo_id, 'seguradora' => $seguradora->id])}}">Detalhes</a>
                                <a class="btn btn-warning text-white" href="{{ route('seguradora.edit', ['seguradora' => $seguradora->id, 'veiculo_id' => $veiculo_id]) }}">Editar</a>
                                <a class="btn btn-danger" href="#modalExcluir" data-toggle="modal" data-url="{{ route('seguradora.destroy', ['veiculo_id' => $veiculo_id, 'seguradora' => $seguradora->id])}}">Excluir</a>
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
                        <div class="form-group col-md-12">
                            <label for="foto">Foto</label>
                            <img id="detalhes-foto" style="width: 100%; max-height: 300px; object-fit: contain">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nome">Nome da Seguradora</label>
                            <input type="text" id="detalhes-nome" name="nome" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="proposta">Nº da Proposta</label>
                            <input type="text" id="detalhes-proposta" name="proposta" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="valor">Valor</label>
                            <input type="text" id="detalhes-valor" name="valor" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhe_do_valor">Detalhe do Valor</label>
                            <input type="text" id="detalhes-detalhe_do_valor" name="detalhe_do_valor" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="franquia">Franquia</label>
                            <input type="text" id="detalhes-franquia" name="franquia" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cobertura">Cobertura</label>
                            <input type="text" id="detalhes-cobertura" name="cobertura" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="danos_materiais">Danos Materiais</label>
                            <input type="text" id="detalhes-danos_materiais" name="danos_materiais" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="danos_corporais">Danos Corporais</label>
                            <input type="text" id="detalhes-danos_corporais" name="danos_corporais" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="danos_morais">Danos Morais</label>
                            <input type="text" id="detalhes-danos_morais" name="danos_morais" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="morte_invalidez">Morte por Invalidez</label>
                            <input type="text" id="detalhes-morte_invalidez" name="morte_invalidez" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vidros">Vidro</label> 
                            <input type="text" id="detalhes-vidros" name="vidros" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="carro_reserva">Carro Reserva</label> 
                            <input type="text" id="detalhes-carro_reserva" name="carro_reserva" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="assistencia">Assistência</label> 
                            <input type="text" id="detalhes-assistencia" name="assistencia" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="observacoes">Observações</label> 
                            <input type="text" id="detalhes-observacoes" name="observacoes" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Desativar-->
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
                    $('#detalhes-nome').val(resposta.nome);
                    $('#detalhes-proposta').val(resposta.proposta);
                    $('#detalhes-valor').val(resposta.valor);
                    $('#detalhes-detalhe_do_valor').val(resposta.detalhe_do_valor);
                    $('#detalhes-franquia').val(resposta.franquia);
                    $('#detalhes-cobertura').val(resposta.cobertura);
                    $('#detalhes-danos_materiais').val(resposta.danos_materiais);
                    $('#detalhes-danos_corporais').val(resposta.danos_corporais);
                    $('#detalhes-danos_morais').val(resposta.danos_morais);
                    $('#detalhes-morte_invalidez').val(resposta.morte_invalidez);
                    $('#detalhes-vidros').val(resposta.vidros);
                    $('#detalhes-carro_reserva').val(resposta.carro_reserva);
                    $('#detalhes-assistencia').val(resposta.assistencia);
                    $('#detalhes-observacoes').val(resposta.observacoes);
                    $('#detalhes-foto').attr('src', resposta.foto);
                });
            })

            $('#modalExcluir').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)

                this.querySelector("form#excluir").action = button.data('url')
            })
        });
    </script>
@endsection