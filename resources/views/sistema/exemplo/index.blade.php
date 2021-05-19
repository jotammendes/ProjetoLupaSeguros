@extends('sistema.template.template')

@section('titulo')
    Exemplo
@endsection

@section('conteudo')
    <h1 class="my-4">Exemplo</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabela de Exemplos
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('exemplo.create') }}">Novo Exemplo</a>
            <a class="btn btn-primary mb-3" href="{{ route('exemplo.deletados') }}">Exemplos Desativados</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($exemplos as $exemplo)
                        <tr>
                            <td>{{ $exemplo->nome }}</td>
                            <td>{{ $exemplo->categoria->titulo }}</td>
                            <td>{{ date('d/m/Y H:i:s', strtotime($exemplo->data)) }}</td>
                            <td>
                                <a class="btn btn-info" href="#modalDetalhes" data-toggle="modal" data-url="{{ route('exemplo.show', $exemplo->id)}}">Detalhes</a>
                                <a class="btn btn-warning text-white" href="{{ route('exemplo.edit', $exemplo->id) }}">Editar</a>
                                <a class="btn btn-danger" href="#modalDesativar" data-toggle="modal" data-url="{{ route('exemplo.destroy', $exemplo->id)}}">Desativar</a>
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
                    <h5 class="modal-title">Detalhes de Exemplo</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h6>Imagem</h6>
                        </div>
                        <div class="form-group col-md-12">
                            <img id="detalhes-imagem" name="detalhes-imagem" style="max-width: 100%; max-height: 430px; object-fit: cover;">
                        </div>

                        <div class="col-12 mt-5 mb-3">
                            <h6>Informações Gerais</h6>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-nome">Nome</label>
                            <input type="text" id="detalhes-nome" name="detalhes-nome" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-categoria">Categoria</label>
                            <input type="text" id="detalhes-categoria" name="detalhes-categoria" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-quantidade">Quantidade</label>
                            <input type="text" id="detalhes-quantidade" name="detalhes-quantidade" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-valor">Valor</label>
                            <input type="text" id="detalhes-valor" name="detalhes-valor" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="detalhes-data">Data</label>
                            <input type="datatime-local" id="detalhes-data" name="detalhes-data" class="form-control" readonly>
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
                    <h5 class="modal-title">Desativar Exemplo</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div align="center" class="modal-body">Tem certeza que deseja desativar este exemplo?</div>
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
                    $('#detalhes-categoria').val(resposta.categoria.titulo);
                    $('#detalhes-quantidade').val(resposta.quantidade);
                    $('#detalhes-valor').val(resposta.valor);
                    $('#detalhes-data').val(resposta.data);
                    $('#detalhes-imagem').attr('src', '/storage/'+ resposta.imagem)
                });
            })

            $('#modalDesativar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)

                this.querySelector("form#desativar").action = button.data('url')
            })
        });
    </script>
@endsection