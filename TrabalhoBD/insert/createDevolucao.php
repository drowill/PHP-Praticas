<?php 

    include __DIR__ . '\..\conexao.php';

    $idlocacao = $_POST['dev_loc_id'];
    $dataDevolucao = $_POST['dev_dataDevolucao'];

    $query = "insert into tb_devolucoes (dev_loc_id, dev_dataDevolucao)
    values ('$idlocacao', '$dataDevolucao')";
    $result = mysqli_query($conexao, $query);

    header('Location: /read/devolucoes');


?>