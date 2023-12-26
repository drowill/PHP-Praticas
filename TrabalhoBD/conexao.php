<?php 

    $conexao = mysqli_connect("localhost", "root", "", "db_locadora");

    if (!$conexao) {
        die("Conexao falhou: " . mysqli_connect_error());
    }

?>