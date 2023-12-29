<?php

include __DIR__ . '/../conexao.php';

$id = $_GET['id'];
$query = "select * from tb_clientes where cli_id = '$id'";
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
    <title>Editar Cliente</title>
</head>
<body>
    <div class="container p-4">
        <div class="row-cols-3">
            <h1>Editar Cliente</h1>
            <form action="/editaCliente?id=<?php echo $_GET['id']; ?>" method="post">
            <label class="form-label" for="cli_nome">Nome:</label>
            <input value="<?php echo $row['cli_nome']; ?>" type="text" class="form-control" name="cli_nome">
            <br>
            <label class="form-label" for="cli_telefone">Telefone:</label>
            <input value="<?php echo $row['cli_telefone'];} ?>" type="text" class="form-control" name="cli_telefone">
            <br>
            <input class="btn btn-primary mt-1" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>