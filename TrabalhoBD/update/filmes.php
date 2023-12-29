<?php

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$query = "select * from tb_filmes where fil_id = '$id'";
$result = mysqli_query($conexao, $query);

while ($row = mysqli_fetch_array($result)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Filme</title>
</head>
<body>
    <div class="container p-4">
        <div class="row-cols-3">
            <h1>Editar filme</h1>
            <form action="/editaFilme?id=<?php echo $_GET['id']; ?>" method="post">
            <label class="form-label" for="fil_titulo">Título:</label>
            <input value="<?php echo $row['fil_titulo']; ?>" type="text" class="form-control" name="fil_titulo">
            <br>
            <label class="form-label" for="fil_anoLancamento">Ano de Lançamento:</label>
            <input value="<?php echo $row['fil_anoLancamento'];} ?>" type="number" class="form-control" name="fil_anoLancamento">
            <br>
            <input class="btn btn-primary mt-1" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>