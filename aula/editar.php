<?php
    require 'conexao.php';
    //require 'conexao.php';

    $id = filter_input(INPUT_GET, 'id');

    $consulta = "SELECT * FROM usuario where id= '$id'";
    $con = $conn->query($consulta) or die($conn->error);

    $dado = mysqli_fetch_array($con);

    //echo $dado['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Editar</title>
</head>
<style>
    h1{
        margin-bottom: 60px;
        color: white;
    }
    body{
        background-image: url("img/main-bg.svg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    label{
        color: white;
    }
    .form-group{
        font-size: 25px;
    }
    #bt{
        margin-top: 20px;
    }

</style>
<body>
    <h1 align="center">Edição de Clientes</h1>
    <br><br>

    <form method="POST" action="processa_edicao.php">
        <div class="form-group col-md-12 offset-md-3">
            <label>
                ID: <input type="text" class="form-control-file" size="40" name="id" value="<?=$id;?>" readonly/>
            </label>
        </div>
        <div class="form-group col-md-12 offset-md-3">
            <label>
                Nome: <input type="text" class="form-control-file" size="40" name="nome" value="<?=$dado['nome'];?>"/>
            </label>
        </div>
        <div class="form-group col-md-12 offset-md-3">
            <label>
                Telefone: <input type="text" class="form-control-file" size="40" name="telefone" value="<?=$dado['telefone'];?>"/>
            </label>
        </div>
        <div class="form-group col-md-12 offset-md-3">
            <label>
                E-mail: <input type="email" class="form-control-file" size="40" name="email" value="<?=$dado['email'];?>"/>
            </label>s
        </div>
        <div class="form-group col-md-12 offset-md-3">
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
            <input type="submit" class="btn btn-success" value="Salvar" class="btn btn-primary btn-lg active">
        </div>
    </form>

</body>
</html>
