<?php 

//Inciando uma sessão. Serve para armazenar informações que será usadas em várias paginas.

session_start();

echo "<h1>INDEX</h1>";
echo "<p>Criando uma sessão que será acessada pela super global. ('_SESSION'). </p>";
//Criando as sessões e exibindo o valor da cada sessão.
$_SESSION['cor'] =  "Verde";
$_SESSION['carro'] =  "Corsa";


echo $_SESSION['cor']. "<br>";
echo $_SESSION['carro']. "<br>".session_id();

var_dump($_SESSION);



?>
