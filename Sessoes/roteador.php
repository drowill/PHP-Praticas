<?php 

$rotas = [
    '/' => '/pages/home.html',
    '/create' => '/pages/cadastro.html',
    '/store' => '/cadastro.php',
    '/home' => '/pages/dash.php'
];

function rotear ($url, $rotas){
    if (array_key_exists($url, $rotas)){
        include __DIR__ . $rotas[$url];
    } else {
        echo "<h1>ERRO</h1>";
    }
}