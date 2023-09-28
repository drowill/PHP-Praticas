<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">

        <?php echo csrf_field(); ?>

        <label for="nome">Nome:</label>
        <input name="nome" placeholder="Nome" type="text">
        <br>
        <label for="senha">Senha:</label>
        <input name="senha" placeholder="Senha" type="password">
        <br>
        <button>Enviar</button>
    </form>
</body>
</html><?php /**PATH C:\Users\20211101110083\semestre2\DeNovo\resources\views/login.blade.php ENDPATH**/ ?>