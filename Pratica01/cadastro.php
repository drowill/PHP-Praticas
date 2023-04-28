<?php
//script responsavel por processar
//a requisicao para cadastro de musica

//uso da superglobal $_SERVER para saber qual o metodo/verbo HTTP
$method = $_SERVER['REQUEST_METHOD'];

if ($method !== "POST"){
    header("Location: index.php");
    exit;
}

//pegar dados da requisicao usando a superglobal $_POST
$musica = $_POST['musica'];

echo "<h1>$musica</h1>"

?>
