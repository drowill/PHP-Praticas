<?php 
$alunos = ['Pedro', 'Miguel', 'Guilherme'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alunos</h1>
    <ul>
        <?php foreach($alunos as $aluno): ?>
        <li> <?php echo $aluno; ?> </li>
        <?php endforeach ?>
    </ul>
</body>
</html>