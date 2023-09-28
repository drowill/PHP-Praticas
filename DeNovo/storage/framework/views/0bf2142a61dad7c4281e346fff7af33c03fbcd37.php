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
        <?php echo csrf_field(); ?>

        <label for="nome">Nome:</label>
        <input name="nome" type="text" value="<?php echo e(old('nome')); ?>">
        <br>
        <label for="senha">Senha:</label>
        <input name="senha" type="password">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html><?php /**PATH C:\Users\20211101110083\semestre2\DeNovo\resources\views/auth/login.blade.php ENDPATH**/ ?>