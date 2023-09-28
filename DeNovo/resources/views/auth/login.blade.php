<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        @csrf

        <label for="nome">Nome:</label>
        <input name="nome" type="text" value="{{old('nome')}}">
        <br>
        <label for="senha">Senha:</label>
        <input name="senha" type="password">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>