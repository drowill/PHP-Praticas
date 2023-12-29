<?php 

    include __DIR__ . '\..\conexao.php';

    $idcliente = $_POST['loc_cli_id'];
    $idfilme = $_POST['loc_fil_id'];
    $dataLocacao = $_POST['loc_dataLocacao'];
    $dataDevolucao = $_POST['loc_dataDevolucao'];

    $query = "insert into tb_locacoes (loc_cli_id, loc_fil_id, loc_dataLocacao, loc_dataDevolucao, loc_valor)
    values ('$idcliente', '$idfilme', '$dataLocacao', '$dataDevolucao', 35)";
    $result = mysqli_query($conexao, $query);

    header('Location: /read');


?>