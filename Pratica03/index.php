<?php 

//incluir var $rotas no arquivo
include __DIR__ . '/rotas.php';

//algoritmo de roteamento
$uri = $_SERVER['REQUEST_URI'];

//CAMINHO ==> ARQUIVO.php
if (array_key_exists($uri, $rotas)) {
    include __DIR__ . $rotas[$uri];
} else {
    http_response_code(404);
    echo "<h1>Página não encontrada</h1>";
}



//roteamento por if else
/* if ($uri === '/'){
    //echo __DIR__ . '/pages/index.php';
    include __DIR__ . '/pages/index.php';
} else if ($uri === '/alunos'){
    include __DIR__ . '/pages/alunos/home.php';
} else if ($uri === '/professores'){
    include __DIR__ . '/pages/professores/home.php';
} */

?>