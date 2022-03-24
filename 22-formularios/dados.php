<?php 
 
//Recebendo os dados via $_POST

$name = $_GET['name'];
$email = $_GET['email'];

echo "Dados cadastrados com sucesso. <br>";
echo "Nome: $name <br>";
echo "Email: $email <br>";

var_dump($_GET);


?>