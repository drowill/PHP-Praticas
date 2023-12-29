<?php 

    include 'conexao.php';

    include 'rotear.php';

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    route($uri, $rotas);
    
?>