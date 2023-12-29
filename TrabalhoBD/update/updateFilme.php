<?php 

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$titulo = $_POST['fil_titulo'];
$anoLancamento = $_POST['fil_anoLancamento'];
$queryUpdate = "update tb_filmes set fil_titulo = '$titulo', fil_anoLancamento = '$anoLancamento' where fil_id = '$id'";
$resultUpdate = mysqli_query($conexao, $queryUpdate);

header('Location: /read');

?>