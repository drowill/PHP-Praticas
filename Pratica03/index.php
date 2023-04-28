<?php 

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/'){
    //echo __DIR__ . '/pages/index.php';
    include __DIR__ . '/pages/index.php';
} else if ($uri === '/alunos'){
    include __DIR__ . '/pages/alunos/home.php';
}

?>