<?php

    require 'conexao.php';
    //include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email = filter_input(INPUT_POST, 'email');

    //$nome = $_POST['nome'];
    //$email = $_POST['email'];
    //$telefone = $_POST['telefone'];

    //sql

    $sql = "insert into usuario(nome, telefone, email) values('$nome', '$telefone', '$email');";

    //executar o sql

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) != 0 ){
        echo "<h1>Deu certo</h1>";
    }else{
        echo "<h1>Erro</h1>";
    }

    header("Location: index.php");
?>