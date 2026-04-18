<?php
    include('con.php');

    $full_request_path = explode('/', $_SERVER['HTTP_REFERER']);
    $request_page = explode('.php',$full_request_path[count($full_request_path)-1])[0];


    $sql = "INSERT INTO ";

    if($request_page == 'cadastrar_animal') {
        $sql .= "animal";
    } else if($request_page == 'cadastrar_raca') {
        $sql .= "raca";
    } else if($request_page == 'cadastrar_especie') {
        $sql .= "especie";
    } else if($request_page == 'cadastrar_servico') {
        $sql .= "servicos";
    } else if($request_page == 'prestacao_servico'){
        $sql .= "animal_servico";
    }

    $sql .= " (";

    $i = 1;
    foreach(array_keys($_POST) as $key) {
        if($i < count($_POST)){
            $sql .= "{$key}, ";
        } else {
            $sql .= "{$key}) VALUES (";
        }
        $i++;
    }

    $i = 1;
    foreach(array_values($_POST) as $value) {
        if($i < count($_POST)) {
            $sql .= "'{$value}', ";
        } else {
            $sql .= "'{$value}');";
        }
        $i++;
    }

    if(!mysqli_query($conexao, $sql)){
        echo 'erro ao inserir';
    } else {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }

    

?>