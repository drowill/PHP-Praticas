<?php

    $rotas = [
        '/' => '/home.html',
        
        //read
        '/read' => '/view/showtables.php',
        '/read/devolucoes' => '/view/showdevol.php',

        //create
        '/create/filmes' => '/insert/filme.html',
        '/create/clientes' => '/insert/cliente.html',
        '/create/locacao' => '/insert/locacao.html',
        '/create/devolucao' => '/insert/devolucao.html',
        '/store/filmes' => '/insert/createFilme.php',
        '/store/clientes' => '/insert/createCliente.php',
        '/store/locacao' => '/insert/createLocacao.php',
        '/store/devolucao' => '/insert/createDevolucao.php',

        //delete
        '/excluir/locacao' => '/delete/deleteLocacao.php',
        '/excluir/filme' => '/delete/deleteFilme.php',
        '/excluir/cliente' => '/delete/deleteCliente.php',
        '/excluir/devolucao' => '/delete/deleteDevolucao.php',

        //update
        '/editar/filmes' => '/update/filmes.php',
        '/editar/cliente' => '/update/clientes.php',
        '/editar/locacao' => '/update/locacao.php',
        '/editar/devolucao' => '/update/devolucao.php',
        '/editaFilme' => '/update/updateFilme.php',
        '/editaCliente' => '/update/updateCliente.php',
        '/editaLocacao' => '/update/updateLocacao.php',
        '/editaDevolucao' => '/update/updateDevolucao.php',
    ];

    function route($uri, $rotas){
        if (array_key_exists($uri, $rotas)) {
            include __DIR__ . $rotas[$uri];
        } else {
            header("Location: /");
        }
    }

?>