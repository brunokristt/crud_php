<?php

    require 'conexao.php';
    //include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email = filter_input(INPUT_POST, 'email');

    //$id = $_POST['id'];
    //$nome = $_POST['nome'];
    //$email = $_POST['email'];
    //$telefone = $_POST['telefone'];

    //sql

    $sql = "update usuario set nome = '$nome', telefone = '$telefone', email = '$email' where id = '$id';";

    //executar o sql

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) != 0 ){
        echo "<h1>Deu certo</h1>";
    }else{
        echo "id: '$id'";
    }

    header("Location: index.php");
?>