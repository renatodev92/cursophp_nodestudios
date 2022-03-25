<?php 
//Sessão
//Se existe a sessão mensagem, exibi na tela a mensagem.
session_start();
if(isset($_SESSION['mensagem'])):
    echo $_SESSION['mensagem'];
endif;
session_unset();//Limpando a sessão após exibir na tela.Libera todas as variáveis de sessão

?>