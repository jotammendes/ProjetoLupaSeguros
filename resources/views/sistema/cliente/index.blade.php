@extends('sistema.template.template')

@section('titulo')
    Cliente
@endsection

@section('conteudo')
    <h1 class="my-4">Cliente</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabela de Clientes
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('cliente.create') }}">Novo Cliente</a>
            <a class="btn btn-primary mb-3" href="{{ route('cliente.deletados') }}">Clientes Desativados</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cpf }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>
                                <a class="btn btn-info" href="#modalDetalhes" data-toggle="modal" data-url="{{ route('cliente.show', $cliente->id)}}">Detalhes</a>
                                <a class="btn btn-warning text-white" href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>
                                <a class="btn btn-danger" href="#modalDesativar" data-toggle="modal" data-url="{{ route('cliente.destroy', $cliente->id)}}">Desativar</a>
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
                    <h5 class="modal-title">Detalhes do Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="detalhes-nome">Nome</label>
                            <input type="text" id="detalhes-nome" name="detalhes-nome" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-cpf">CPF</label>
                            <input type="text" id="detalhes-cpf" name="detalhes-cpf" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-data_nascimento">Data de Nascimento</label>
                            <input type="text" id="detalhes-data_nascimento" name="detalhes-data_nascimento" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-estadoCivil">Estado Civil</label>
                            <input type="text" id="detalhes-estadoCivil" name="detalhes-estadoCivil" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-genero">Genero</label>
                            <input type="text" id="detalhes-genero" name="detalhes-genero" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-telefone">Telefone</label>
                            <input type="text" id="detalhes-telefone" name="detalhes-telefone" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-email">E-mail</label>
                            <input type="text" id="detalhes-email" name="detalhes-email" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-seguradoraAnterior">Seguradora Anterior</label>
                            <input type="text" id="detalhes-seguradoraAnterior" name="detalhes-seguradoraAnterior" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-precoAnterior">Preço Anterior</label>
                            <input type="text" id="detalhes-precoAnterior" name="detalhes-precoAnterior" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-bonus">Bonus</label>
                            <input type="text" id="detalhes-bonus" name="detalhes-bonus" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-vigenciaEntrada">Vigencia de Entrada</label>
                            <input type="text" id="detalhes-vigenciaEntrada" name="detalhes-vigenciaEntrada" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-vigenciaSaida">Vigencia de Saida</label>
                            <input type="text" id="detalhes-vigenciaSaida" name="detalhes-vigenciaSaida" class="form-control" readonly>
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
    <div id="modalDesativar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Desativar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div align="center" class="modal-body">Tem certeza que deseja desativar este Cliente?</div>
                <div class="modal-footer">
                    <form id="desativar" method="POST" enctype="multipart/form-data" name="desativar">
                        @csrf
                        @method('DELETE')
                        <button type="submit" form="desativar" class="btn btn-danger">Desativar</button>
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
                    $('#detalhes-cpf').val(resposta.cpf);
                    $('#detalhes-data_nascimento').val(resposta.data_nascimento_formatada);
                    $('#detalhes-estadoCivil').val(resposta.estado_civil);
                    $('#detalhes-genero').val(resposta.genero);
                    $('#detalhes-telefone').val(resposta.telefone);
                    $('#detalhes-email').val(resposta.email);
                    $('#detalhes-seguradoraAnterior').val(resposta.seguradora_anterior);
                    $('#detalhes-precoAnterior').val(resposta.preco_anterior_formatado);
                    $('#detalhes-bonus').val(resposta.bonus);
                    $('#detalhes-vigenciaEntrada').val(resposta.vigencia_entrada_formatada);
                    $('#detalhes-vigenciaSaida').val(resposta.vigencia_saida_formatada);
                    
                });
            })

            $('#modalDesativar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)

                this.querySelector("form#desativar").action = button.data('url')
            })
        });
    </script>
@endsection