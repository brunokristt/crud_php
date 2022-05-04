<?php

require 'conexao.php';

$id = filter_input(INPUT_GET, 'id');

$sql = "delete from usuario where id= '$id';";

$result = mysqli_query($conn, $sql);

header("Location: index.php");
?>