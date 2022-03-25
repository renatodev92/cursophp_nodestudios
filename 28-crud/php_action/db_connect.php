<?php 
//Conexão com o banco de dados

$serverName = "localhost";
$userName   = "root";
$passWord   = "";
$dbName     = "crud";


$connect = mysqli_connect($serverName, $userName, $passWord, $dbName);
mysqli_set_charset($connect, "utf8");//Altera o conjunto de caracteres do cliente padrão:

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;
?>