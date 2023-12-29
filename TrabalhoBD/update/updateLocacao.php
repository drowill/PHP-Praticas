<?php 

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$idcliente = $_POST['loc_cli_id'];
$idfilme = $_POST['loc_fil_id'];
$dataLocacao = $_POST['loc_dataLocacao'];
$dataDevolucao = $_POST['loc_dataDevolucao'];
$queryUpdate = "update tb_locacoes set loc_cli_id = '$idcliente', loc_fil_id = '$idfilme',
loc_dataLocacao = '$dataLocacao', loc_dataDevolucao = '$dataDevolucao' where loc_id = '$id'";
$resultUpdate = mysqli_query($conexao, $queryUpdate);

header('Location: /read');

?>