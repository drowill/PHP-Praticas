<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar livro</title>
</head>
<body>
    <h1>Criar livro</h1>
    <form action="" method="post">
        @csrf 
        <label for="livro">Nome do Livro: </label>
        <input name="livro" type="text">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>