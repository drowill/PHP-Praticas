<?php

include __DIR__ . '\..\conexao.php';

$queryDevolucoes = "select dev_id, cli_nome, fil_titulo, dev_dataDevolucao, loc_dataDevolucao, dev_multa from tb_devolucoes 
join tb_locacoes on loc_id = dev_loc_id join tb_clientes on cli_id = loc_cli_id join tb_filmes on fil_id = loc_fil_id";
$resultDevolucoes = mysqli_query($conexao, $queryDevolucoes);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluções</title>
</head>
<body>
    
<div class="container p-4">
        <h1 class="display-4">Devoluções <a href="/create/devolucao" class="btn btn-primary">Inserir nova Devolução</a></h1>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Filme</th>
                <th>Data de Devolução</th>
                <th>Data de Devolução Prevista</th>
                <th>Multa R$</th>
                <th>Opções</th>
            </tr>
             <?php
                while ($row = mysqli_fetch_array($resultDevolucoes)){
                    echo "<tr>
                        <td>{$row['dev_id']}</td>
                        <td>{$row['cli_nome']}</td>
                        <td>{$row['fil_titulo']}</td>
                        <td>{$row['dev_dataDevolucao']}</td>
                        <td>{$row['loc_dataDevolucao']}</td>
                        <td>{$row['dev_multa']}</td>
                        <td><a class='btn btn-success' href='/editar/devolucao?id=".$row['dev_id']."'><i class='bi bi-pencil-square'></i></a>
                        <a class='mx-1 btn btn-danger' href='/excluir/devolucao?id=".$row['dev_id']."'><i class='bi bi-trash3'></i></a></td>
                    </tr>";
                }
            ?> 
            
        </table>
    </div>

    <br>

    <div class="container p-4 ">
        <a href="/read" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>