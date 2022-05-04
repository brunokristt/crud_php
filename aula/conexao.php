<?php //arquivo de conexao com o banco de dados
/*variaveis de conexao*/
    $servidor = "localhost";
    $usuario = "teste-aula";
    $senha = "teste-aula";
    $db = "crud";

/*Criar a conexão usando as variaveis*/

    $conn = mysqli_connect($servidor, $usuario, $senha, $db);

    if( !$conn ){//erro

        die("Falha na conexao: " .mysqli_connect_error());

    }else{

        //echo "Conexao Ok";

    }

?>