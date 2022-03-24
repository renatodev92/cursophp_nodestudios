<?php 
//Encerrando a sessão
session_start(); //Iniciando uma sessão
session_unset(); // Removendo todas as variaveis de uma sessão
session_destroy(); //Destruindo uma sessão
header('Location: index.php');//Após clicar no botão sair, ele será redirecionado para index.php.

?>