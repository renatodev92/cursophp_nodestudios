<?php 

//Criando a conexão com o banco de dados.
$servername = "localhost"; //Endereço do servidor
$username   = "root";//Usuario do phpmyadmin
$password   = "";//Senha do phpmyadm
$dbname     = "sistemalogin";//Nome do banco de dados.


//O mysqli_connect() função abre uma nova conexão com o servidor MySQL.
$connect    = mysqli_connect($servername, $username, $password, $dbname);

//mysqli_connect_error — Retorna uma string descrevendo o ultimo erro da função connect.

if(mysqli_connect_error()):
    echo "Falha na conexão com o bando de dados.".mysqli_connect_error();
endif;

?>