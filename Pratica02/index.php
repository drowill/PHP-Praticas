<?php
//aula sobre string de consulta

echo "<pre>";
echo "<h1>Bem-vindo</h1>";
echo "</pre>";

//obtendo string de consulta

//$string = $_SERVER['QUERY_STRING'];
$string = filter_input(INPUT_SERVER, 'QUERY_STRING');
parse_str($string, $lista_final);

echo "<pre>";
//echo "<h1>$string</h1>";
echo "<h3>String de consulta</h3>";
print_r($lista_final);
echo "</pre>";

$numero_escolhido = $lista_final['numero'];

var_dump($numero_escolhido);

echo "<pre>";
echo "<h1>Numero escolhido</h1>";
if ($numero_escolhido = 10){
    echo "Parabens";
}else{
    echo "Tente de novo";
}
echo "</pre>";

?>