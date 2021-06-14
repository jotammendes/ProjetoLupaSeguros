@extends('sistema.template.template')

@section('titulo')
    Usuário
@endsection

@section('conteudo')
    <h1 class="my-4">Usuário</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabela de Usuários Desativados
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('user.index') }}">Voltar</a>
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
                                <a class="btn btn-warning text-white" href="#modalRestaurar" data-toggle="modal" data-url="{{ route('user.restaurar', $user->id)}}">Restaurar</a>
                                <a class="btn btn-danger" href="#modalDeletar" data-toggle="modal" data-url="{{ route('user.deletar', $user->id)}}">Deletar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Restaurar-->
    <div id="modalRestaurar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Restaurar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div align="center" class="modal-body">Tem certeza que deseja restaurar este Usuário?</div>
                <div class="modal-footer">
                    <form id="restaurar" method="POST" enctype="multipart/form-data" name="restaurar">
                        @csrf
                        @method('POST')
                        <button type="submit" form="restaurar" class="btn btn-warning text-white">Restaurar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Deletar-->
    <div id="modalDeletar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deletar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div align="center" class="modal-body">Tem certeza que deseja deletar permanentemente este Usuário?</div>
                <div class="modal-footer">
                    <form id="deletar" method="POST" enctype="multipart/form-data" name="deletar">
                        @csrf
                        @method('DELETE')
                        <button type="submit" form="deletar" class="btn btn-danger">Deletar</button>
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
            $('#modalRestaurar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)

                this.querySelector("form#restaurar").action = button.data('url')
            })

            $('#modalDeletar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)

                this.querySelector("form#deletar").action = button.data('url')
            })
        }
    </script>
@endsection