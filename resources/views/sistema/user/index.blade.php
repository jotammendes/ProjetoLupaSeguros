@extends('sistema.template.template')

@section('titulo')
    Usuários
@endsection

@section('conteudo')
    <h1 class="my-4">Usuário</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabela de Usuários
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('user.create') }}">Novo Usuário</a>
            <a class="btn btn-primary mb-3" href="{{ route('user.deletados') }}">Usuários Desativados</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nome }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class="btn btn-warning text-white" href="{{ route('user.edit', $user->id) }}">Editar</a>
                                <a class="btn btn-danger" href="#modalDesativar" data-toggle="modal" data-url="{{ route('user.destroy', $user->id)}}">Desativar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Desativar-->
    <div id="modalDesativar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Desativar Usuário</h5>
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
            $('#modalDesativar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)

                this.querySelector("form#desativar").action = button.data('url')
            })
        });
    </script>
@endsection