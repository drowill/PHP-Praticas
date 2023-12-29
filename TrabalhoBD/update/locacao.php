<?php

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$query = "select * from tb_locacoes where loc_id = '$id'";
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
    <title>Editar Locacao</title>
</head>
<body>
    <div class="container p-4">
        <div class="row-cols-3">
            <h1>Editar Locacao</h1>
            <form action="/editaLocacao?id=<?php echo $_GET['id']; ?>" method="post">
            <label class="form-label" for="loc_cli_id">ID Cliente:</label>
            <input value="<?php echo $row['loc_cli_id']; ?>" type="number" class="form-control" name="loc_cli_id">
            <br>
            <label class="form-label" for="loc_fil_id">ID Filme:</label>
            <input value="<?php echo $row['loc_fil_id']; ?>" type="number" class="form-control" name="loc_fil_id">
            <br>
            <label class="form-label" for="loc_dataLocacao">Data de Locação:</label>
            <input value="<?php echo $row['loc_dataLocacao']; ?>" type="date" class="form-control" name="loc_dataLocacao">
            <br>
            <label class="form-label" for="loc_dataDevolucao">Data de Devolução:</label>
            <input value="<?php echo $row['loc_dataDevolucao'];} ?>" type="date" class="form-control" name="loc_dataDevolucao">
            <br>
            <input class="btn btn-primary mt-1" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>