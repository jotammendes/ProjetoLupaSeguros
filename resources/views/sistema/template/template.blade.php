<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Lupa Seguros | @yield('titulo')</title>

        <link href="{{ asset('./css/styles.css') }}" rel="stylesheet" />

        @yield('style')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand d-flex justify-content-center align-items-center" href="index.html">
                <img src="{{ asset('/img/logo-sem-fundo-horizontal.png') }}" height="40" alt="Logo Lupa Seguros">
            </a>

            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('user.edit', ['user' => Auth::user()->id]) }}">Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Páginas</div>

                            @if(Auth::user()->id === 1)
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Usuário
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('user.index') }}">Lista de Usuários</a>
                                        <a class="nav-link" href="{{ route('user.deletados') }}">Lista de Desativados</a>
                                        <a class="nav-link" href="{{ route('user.create') }}">Novo Usuário</a>
                                    </nav>
                                </div>
                            @endif

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCliente" aria-expanded="false" aria-controls="collapseCliente">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-injured" aria-hidden="true"></i></div>
                                Clientes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCliente" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('cliente.index') }}">Lista de Clientes</a>
                                    <a class="nav-link" href="{{ route('cliente.deletados') }}">Lista de Clientes Desativados</a>
                                    <a class="nav-link" href="{{ route('cliente.create') }}">Novo Cliente</a>
                                </nav>
                            </div>
                            
                            @isset($cliente_id)
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVeiculo" aria-expanded="false" aria-controls="collapseVeiculo">
                                    <div class="sb-nav-link-icon"><i class="fas fa-car" aria-hidden="true"></i></div>
                                    Veículos
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseVeiculo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('veiculo.index', ['cliente_id' => $cliente_id]) }}">Lista de Veículos</a>
                                        <a class="nav-link" href="{{ route('veiculo.create', ['cliente_id' => $cliente_id]) }}">Novo Veículo</a>
                                    </nav>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->nome }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="mt-4">
                            @component('sistema.componente.alertas')
                            @endcomponent
                        </div>
                        
                        @yield('conteudo')

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Lupa Seguros &copy; Seu Sistema Web 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('./js/scripts.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('./js/datatables-demo.js') }}"></script>

        @yield('script')
    </body>
</html>
