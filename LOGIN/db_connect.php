<?php

//Conexão com o BD

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistema";

$connect = mysqli_connect($servername, $username, $password, $db_name);

//Testando a conexao. Se a pagina ficar em branco, deu certo. Se exibir erro, deu errado

if(mysqli_connect_error()):
    echo "Falha na conexão:".mysqli_connect_error();
endif;



