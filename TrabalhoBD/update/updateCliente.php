<?php 

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$nome = $_POST['cli_nome'];
$telefone = $_POST['cli_telefone'];
$queryUpdate = "update tb_clientes set cli_nome = '$nome', cli_telefone = '$telefone' where cli_id = '$id'";
$resultUpdate = mysqli_query($conexao, $queryUpdate);

header('Location: /read');

?>