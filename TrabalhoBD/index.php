<?php 

    include 'conexao.php';

    $query = "SELECT * FROM Filmes";
    $result = mysqli_query($conexao, $query);

?>