<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Lupa Seguros | Cotação de Seguro - Automóvel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    
    <link href="{{ asset('/css/relatorio.css') }}" rel="stylesheet" />
  </head>
  <body class="m-3">
    <div class="header d-flex gap-3 align-items-center">
      <img src="{{ asset('/img/logo-teste.png') }}" width="200" alt="Logo Lupa Seguros">
      <div>
        <p class="text-small"><b>Hrd Corretora De Seguros E Administraçao Ltda</b></p>
        <p class="text-small">Rua Clóvis Machado, 156 - SL 614/616 - Praia Do Suá - Vitória/ES</p>
        <p class="text-small">HRDSEGUROS@HRDSEGUROS.COM.BR</p>
      </div>
    </div>

    <div class="text-center">
      <h1 class="m-0">Cotação de Seguro</h1>
      <h2 class="mb-3">Automóvel</h2>
    </div>

    <div class="row dados-cliente">
      <div class="col-3 d-flex flex-column justify-content-center align-items-center">
        <i class="fas fa-5x fa-user mb-3"></i>
        <p class="text-body"><b>SEGURADO</b></p>
        <p class="text-body">{{ $cliente->nome }}</p>
        <p class="text-body"><b>CPF/CNPJ</b></p>
        <p class="text-body">{{ $cliente->cpf }}</p>
        <p class="text-body"><b>NASCIMENTO</b></p>
        <p class="text-body">{{ $cliente->data_nascimento_formatada }}</p>
        <p class="text-body"><b>ESTADO CIVIL</b></p>
        <p class="text-body">{{ $cliente->estado_civil }}</p>
        <p class="text-body"><b>GÊNERO</b></p>
        <p class="text-body">{{ $cliente->genero }}</p>
        <p class="text-body"><b>TELEFONE</b></p>
        <p class="text-body">{{ $cliente->telefone }}</p>
        <p class="text-body"><b>E-MAIL</b></p>
        <p class="text-body">{{ $cliente->email }}</p>
      </div>
      <div class="col-3 d-flex justify-content-center">
        <i class="fas fa-5x fa-car"></i>
      </div>
      <div class="col-3 d-flex justify-content-center">
        <i class="fas fa-5x fa-clipboard-list"></i>
      </div>
      <div class="col-3 d-flex justify-content-center">
        <i class="fas fa-5x fa-umbrella"></i>
      </div>
    </div>

    <div class="footer text-center">
      <p class="text-small footer-date">Elaborado em {{ $data }} - COTAÇÃO VÁLIDA POR 5 DIAS CORRIDOS.</p>
      <p class="text-small footer-attempt">O valor desta cotação poderá sofrer alteração de acordo com o sistema da segu radora, sem aviso prévio.</p>
    </div>

    <div style="page-break-before: always"></div>

    {{-- <p>{{$cliente}}</p>
    <p>{{$veiculo}}</p>
    <p>{{$seguradoras}}</p> --}}
  </body>
</html>
