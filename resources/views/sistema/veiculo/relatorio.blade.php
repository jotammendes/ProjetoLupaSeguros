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
  <body>
    <div class="d-flex flex-column">
      <div class="header d-flex gap-3 align-items-center">
        <img src="{{ asset('/img/logo-com-fundo.png') }}" width="200" alt="Logo Lupa Seguros">
        <div>
          <p class="text-small"><b>LuPa Corretora e Administradora de Seguros Ltda</b></p>
          <p class="text-small">Rua Fortaleza, 1639, Itapoã, Vila Velha/ES</p>
          <p class="text-small">lucasfaccinicor@gmail.com</p>
        </div>
      </div>

      <div class="text-center">
        <h1 class="m-0">Cotação de Seguro</h1>
        <h2 class="mb-3">Automóvel</h2>
      </div>

      <div class="row dados-cliente mb-3">
        <div class="col-3 d-flex flex-column justify-content-start align-items-center">
          <i class="fas fa-5x fa-user mb-2"></i>
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
        <div class="col-3 d-flex flex-column justify-content-start align-items-center">
          <i class="fas fa-5x fa-car mb-2"></i>
          <p class="text-body"><b>VEÍCULO</b></p>
          <p class="text-body">{{ $veiculo->descricao_veiculo }}</p>
          <p class="text-body"><b>CHASSI</b></p>
          <p class="text-body">{{ $veiculo->chassi }}</p>
          <p class="text-body"><b>PLACA</b></p>
          <p class="text-body">{{ $veiculo->placa }}</p>
          <p class="text-body"><b>ANO</b></p>
          <p class="text-body">{{ $veiculo->ano }}</p>
          <p class="text-body"><b>COMBUSTÍVEL</b></p>
          <p class="text-body">{{ $veiculo->combustivel }}</p>
          <p class="text-body"><b>ALIENADO</b></p>
          <p class="text-body">{{ $veiculo->alienado }}</p>
          <p class="text-body"><b>FATOR DE AJUSTE</b></p>
          <p class="text-body">{{ $veiculo->fator_de_ajuste }}</p>
          <p class="text-body"><b>VALOR REFERÊNCIA</b></p>
          <p class="text-body">{{ $veiculo->valor_de_referencia }}</p>
          <p class="text-body"><b>CEP DE PERNOITE</b></p>
          <p class="text-body">{{ $veiculo->cep_de_pernoite }}</p>
        </div>
        <div class="col-3 d-flex flex-column justify-content-start align-items-center">
          <i class="fas fa-5x fa-clipboard-list mb-2"></i>
          <p class="text-body"><b>GARAGEM NA RESIDÊNCIA</b></p>
          <p class="text-body">{{ $veiculo->garagem_na_residencia }}</p>
          <p class="text-body"><b>GARAGEM NO TRABALHO</b></p>
          <p class="text-body">{{ $veiculo->garagem_no_trabalho }}</p>
          <p class="text-body"><b>GARAGEM NO LOCAL DEESTUDO</b></p>
          <p class="text-body">{{ $veiculo->garagem_no_local_de_estudo }}</p>
          <p class="text-body"><b>TIPO DE USO</b></p>
          <p class="text-body">{{ $veiculo->tipo_de_uso }}</p>
          <p class="text-body"><b>RESIDE COM MENORES DE 26 ANOS</b></p>
          <p class="text-body">{{ $veiculo->reside_com_menores_de_26_anos }}</p>
          <p class="text-body"><b>VEÍCULOS NA RESIDÊNCIA</b></p>
          <p class="text-body">{{ $veiculo->veiculos_na_residencia }}</p>
          <p class="text-body"><b>KM MENSAL</b></p>
          <p class="text-body">{{ $veiculo->km_mensal }}</p>
          <p class="text-body"><b>TIPO DE RESIDÊNCIA</b></p>
          <p class="text-body">{{ $veiculo->tipo_de_residencia }}</p>
          <p class="text-body"><b>DISTÂNCIA ATÉ O TRABALHO</b></p>
          <p class="text-body">{{ $veiculo->distancia_ate_o_trabalho }}</p>
        </div>
        <div class="col-3 d-flex flex-column justify-content-start align-items-center">
          <i class="fas fa-5x fa-umbrella mb-2"></i>
          <p class="text-body"><b>SEGURADORA ANTERIOR</b></p>
          <p class="text-body">{{ $cliente->seguradora_anterior }}</p>
          <p class="text-body"><b>PREÇO ANTERIOR</b></p>
          <p class="text-body">{{ $cliente->preco_anterior }}</p>
          <p class="text-body"><b>BÔNUS</b></p>
          <p class="text-body">{{ $cliente->bonus }}</p>
          <p class="text-body"><b>VIGÊNCIA</b></p>
          <p class="text-body">{{ $cliente->vigencia_entrada_formatada }} a {{ $cliente->vigencia_saida_formatada }}</p>
        </div>
      </div>

      <div class="footer text-center mt-auto">
        <p class="text-small footer-date">Elaborado em {{ $data }} - COTAÇÃO VÁLIDA POR 5 DIAS CORRIDOS.</p>
        <p class="text-small footer-attempt">O valor desta cotação poderá sofrer alteração de acordo com o sistema da segu radora, sem aviso prévio.</p>
      </div>
    </div>

    <div style="page-break-before: always"></div>

    <div class="d-flex flex-column">
      <div class="header d-flex gap-3 align-items-center">
        <img src="{{ asset('/img/logo-com-fundo.png') }}" width="200" alt="Logo Lupa Seguros">
        <div>
          <p class="text-small"><b>Hrd Corretora De Seguros E Administraçao Ltda</b></p>
          <p class="text-small">Rua Clóvis Machado, 156 - SL 614/616 - Praia Do Suá - Vitória/ES</p>
          <p class="text-small">HRDSEGUROS@HRDSEGUROS.COM.BR</p>
        </div>
      </div>

      <div class="text-center">
        <h1 class="m-3">Resultado da Cotação</h1>
      </div>

      <div class="d-flex mb-3">
        <table class="tabela-seguradoras mx-auto">
          <thead>
            <tr>
              <th>SEGURADORA</th>
              <th>PREÇO</th>
              <th>FRANQUIA</th>
              <th>COBERTURA</th>
              <th>DANOS MATERIAIS</th>
              <th>DANOS CORPORAIS</th>
              <th>DANOS MORAIS</th>
              <th>MORTE / INVALIDEZ</th>
              <th>VIDROS</th>
              <th>CARRO RESERVA</th>
              <th>ASSISTÊNCIA</th>
              <th>OBSERVAÇÕES</th>
            </tr>
          </thead>
          <tbody>
            @foreach($seguradoras as $seguradora)
              <tr>
                <td><img src="{{ $seguradora->foto }}" alt="Logo da seguradora {{ $seguradora->nome }}"> <p>{{ $seguradora->cnpj }}</p></td>
                <td><b>{{ $seguradora->valor_formatado }}</b><p>{{ $seguradora->detalhe_do_valor }}</p></td>
                <td><b>{{ $seguradora->franquia_formatada }}</b></td>
                <td><p>{{ $seguradora->cobertura }}</p></td>
                <td><b>{{ $seguradora->danos_materiais_formatado }}</b></td>
                <td><b>{{ $seguradora->danos_corporais_formatado }}</b></td>
                <td><b>{{ $seguradora->danos_morais_formatado }}</b></td>
                <td><b>{{ $seguradora->morte_invalidez_formatado }}</b></td>
                <td><p>{{ $seguradora->vidros }}</p></td>
                <td><p>{{ $seguradora->carro_reserva }}</p></td>
                <td><p>{{ $seguradora->assistencia }}</p></td>
                <td><p>{{ $seguradora->observacoes }}</p></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="footer text-center mt-auto">
        <p class="text-small footer-date">Elaborado em {{ $data }} - COTAÇÃO VÁLIDA POR 5 DIAS CORRIDOS.</p>
        <p class="text-small footer-attempt">O valor desta cotação poderá sofrer alteração de acordo com o sistema da segu radora, sem aviso prévio.</p>
      </div>
    </div>

    <div style="page-break-before: always"></div>
  </body>
</html>
