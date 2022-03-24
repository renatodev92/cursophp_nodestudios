<?php 
echo "<h1>Logout... End</h1>";
echo "<p>Encerrando uma sessão!</p>";

session_start(); //Inicia a sessão.
session_unset();// Limpa a sessão.
session_destroy();//Destruir a sessão.

?>