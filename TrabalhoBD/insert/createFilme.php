<?php 

    include __DIR__ . '\..\conexao.php';

    $titulo = $_POST['fil_titulo'];
    $anoLancamento = $_POST['fil_anoLancamento'];

    $query = "insert into tb_filmes (fil_titulo,fil_anoLancamento, fil_disponivel) values ('$titulo','$anoLancamento', true)";
    $result = mysqli_query($conexao, $query);

    header('Location: /read');

?>