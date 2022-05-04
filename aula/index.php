<?php
    require 'conexao.php';

    $consulta = "SELECT * FROM USUARIO";
    $con = $conn->query($consulta) or die($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Programação Web</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

</style>
<body>
    <div>
        <h1 align="center">Lista de Usuários</h1>
    </div>
    <div>
        <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col"><a class="btn btn-light btn-sm col-md-5 offset-md-2" href="cadastrar.php" role="button">Cadastrar Novo Usuário</a></th>
            </tr>
        </thead>
        <tbody>

        <?php while($dado = $con->fetch_array()){ ?>

        <tr>
            <td><?php echo $dado["id"]; ?></td>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["telefone"]; ?></td>
            <td><?php echo $dado["email"]; ?>
            <td>
                <a class="btn btn-primary btn-sm col-md-1,5 offset-md-2" href="editar.php?id=<?=$dado["id"];?>" role="button">Editar</a>
                <a class="btn btn-danger btn-sm col-md-1,5" href="deletar.php?id=<?=$dado["id"];?>" role="button">Deletar</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </div>
</table>
</body>
</html>
