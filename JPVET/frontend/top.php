<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>JP Vet</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">JP Vet</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cadastros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="cadastrar_animal.php">Animal</a></li>
                  <li><a class="dropdown-item" href="cadastrar_especie.php">Espécie</a></li>
                  <li><a class="dropdown-item" href="cadastrar_raca.php">Raça</a></li>
                  <li><a class="dropdown-item" href="cadastrar_servico.php">Serviço</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="prestacao_servico.php">Prestação de Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="relatorio_servico.php">Relatório de Serviços</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>