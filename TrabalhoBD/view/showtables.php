<?php 

    include __DIR__ . '\..\conexao.php';

    $queryFilmes = "select * from tb_filmes";
    $resultFilmes = mysqli_query($conexao, $queryFilmes);

    $queryClientes = "select * from tb_clientes";
    $resultClientes = mysqli_query($conexao, $queryClientes);

    $queryLocacoes = "call sp_exibeLocacoes()";
    $resultLocacoes = mysqli_query($conexao, $queryLocacoes);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tables</title>
</head>
<body>
    <nav class="px-4 navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Locadora</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="text-light nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class=" text-light nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class=" text-light nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Busque filmes" aria-label="Busque filmes">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="container p-4">
        <h1 class="display-4">Filmes <a href="/create/filmes" class="btn btn-primary">Inserir novo Filme</a> </h1>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Ano de Lançamento</th>
                <th>Disponibilidade</th>
                <th>Opções</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($resultFilmes)){
                    echo "<tr>
                        <td>{$row['fil_id']}</td>
                        <td>{$row['fil_titulo']}</td>
                        <td>{$row['fil_anoLancamento']}</td>
                        <td>{$row['fil_disponivel']}</td>
                        <td><a class='btn btn-success' href='/editar/filmes?id=".$row['fil_id']."'><i class='bi bi-pencil-square'></i></a>
                        <a class='mx-1 btn btn-danger' href='/excluir/filme?id=".$row['fil_id']."'><i class='bi bi-trash3'></i></a></td>
                    </tr>";
                }
            ?>
            
        </table>
    </div>
    <br>
    <div class="container p-4">
        <h1 class="display-4">Clientes <a href="/create/clientes" class="btn btn-primary">Inserir novo Cliente</a> </h1>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Opções</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($resultClientes)){
                    echo "<tr>
                        <td>{$row['cli_id']}</td>
                        <td>{$row['cli_nome']}</td>
                        <td>{$row['cli_telefone']}</td>
                        <td><a class='btn btn-success' href='/editar/cliente?id=".$row['cli_id']."'><i class='bi bi-pencil-square'></i></a>
                        <a class='mx-1 btn btn-danger' href='/excluir/cliente?id=".$row['cli_id']."'><i class='bi bi-trash3'></i></a></td>
                    </tr>";
                }
            ?>
            
        </table>
    </div>
    <br>
    <div class="container p-4">
        <h1 class="display-4">Locações <a href="/create/locacao" class="btn btn-primary">Inserir nova Locacao</a></h1>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Filme</th>
                <th>Data de Locação</th>
                <th>Data de Devolução</th>
                <th>Valor R$</th>
                <th>Opções</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($resultLocacoes)){
                    echo "<tr>
                        <td>{$row['loc_id']}</td>
                        <td>{$row['cli_nome']}</td>
                        <td>{$row['fil_titulo']}</td>
                        <td>{$row['loc_dataLocacao']}</td>
                        <td>{$row['loc_dataDevolucao']}</td>
                        <td>{$row['loc_valor']}</td>
                        <td><a class='btn btn-success' href='/editar/locacao?id=".$row['loc_id']."'><i class='bi bi-pencil-square'></i></a>
                        <a class='mx-1 btn btn-danger' href='/excluir/locacao?id=".$row['loc_id']."'><i class='bi bi-trash3'></i></a></td>
                    </tr>";
                }
            ?>
            
        </table>
    </div>

    <div class="container p-4 ">
        <a href="/" class="btn btn-primary">Voltar</a> <a class="btn btn-primary" href="/read/devolucoes">Página de Devoluções</a>
    </div>
</body>
</html>