<?php 

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$idlocacao = $_POST['dev_loc_id'];
$dataDevolucao = $_POST['dev_dataDevolucao'];

$queryUpdate = "update tb_devolucoes set dev_loc_id = '$idlocacao', dev_dataDevolucao = '$dataDevolucao' where dev_id = '$id'";
$resultUpdate = mysqli_query($conexao, $queryUpdate);

header('Location: /read/devolucoes');

?>