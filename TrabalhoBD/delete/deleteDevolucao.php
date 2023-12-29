<?php 

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$query = "delete from tb_devolucoes where dev_id = '$id'";
$result = mysqli_query($conexao, $query);

header('Location: /read/devolucoes');

?>