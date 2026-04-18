<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'clientes';

    if(!$conexao = mysqli_connect($server, $user, $pass, $db)) {
        echo 'http://localhost/jpvet';
    }

?>