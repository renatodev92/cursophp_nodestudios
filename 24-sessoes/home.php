<?php 

//Inciando uma sessão. Serve para armazenar informações que será usadas em várias paginas.
session_start();

echo "<h1>HOME</h1>";

//Exibi a sessão
echo $_SESSION['cor']. "<br>";
echo $_SESSION['carro']. "<br>".session_id();


var_dump($_SESSION);

?>