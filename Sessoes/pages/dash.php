<?php

if ( ! $_SESSION['matricula']){
    header('location: /');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>bom dia <?php echo $_SESSION['matricula']; ?></h1>
</body>
</html>