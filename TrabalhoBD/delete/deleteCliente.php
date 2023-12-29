<?php 

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
//printf($id);
$query = "delete from tb_clientes where cli_id = '$id'";
$result = mysqli_query($conexao, $query);

header('Location: /read');

?>