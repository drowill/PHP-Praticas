<?php

include __DIR__ . '/roteador.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear ($url, $rotas);

?>