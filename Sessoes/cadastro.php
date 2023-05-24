<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    header('location: /create');
}

$matricula = $_POST['matricula'];

$_SESSION['matricula'] = $matricula;

