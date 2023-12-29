<?php 

    include __DIR__ . '\..\conexao.php';

    $nome = $_POST['cli_nome'];
    $telefone = $_POST['cli_telefone'];

    $query = "insert into tb_clientes (cli_nome, cli_telefone) values ('$nome','$telefone')";
    $result = mysqli_query($conexao, $query);

    header('Location: /read');

?>