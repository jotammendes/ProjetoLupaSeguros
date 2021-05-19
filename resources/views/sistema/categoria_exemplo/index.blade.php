@extends('sistema.template.template')

@section('titulo')
    Categoria de Exemplo
@endsection

@section('conteudo')
    <h1 class="my-4">Categoria de Exemplo</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabela de Categoria de Exemplo
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('categoria_exemplo.create') }}">Nova Categoria</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Quantidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Título</th>
                            <th>Quantidade</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->titulo }}</td>
                            <td>{{ 1 }}</td>
                            <td>
                                <a class="btn btn-warning text-white" href="{{ route('categoria_exemplo.edit', $categoria->id) }}">Editar</a>
                                <a class="btn btn-danger" href="#modalDeletar" data-toggle="modal" data-url="{{ route('categoria_exemplo.destroy', $categoria->id)}}">Deletar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal deletar-->
    <div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="modalDeletarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-12 text-dark" id="modalDeletarLabel">Deletar Categoria de Exemplo</h5>
                </div>
                <div align="center" class="modal-body">Tem certeza que deseja excluir esta categoria?</div>
                <div class="modal-footer">
                    <form id="deletar" method="POST" enctype="multipart/form-data" name="deletar">
                        @csrf
                        @method('DELETE')
                        <button type="submit" form="deletar" class="btn btn-danger">Excluir</button>
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
        window.onload = () => {
            $('#modalDeletar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                this.querySelector("form#deletar").action = button.data('url')
            })
        }
    </script>
@endsection