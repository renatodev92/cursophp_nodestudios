<?php 

/////TRABALHANDO COM SUPERGLOBAIS EM PHP/////
echo "<h1>TRABALHANDO VARIAVEIS SUPERGLOBAIS EM PHP</h1>";

//$GLOBALS - Aramezena todas as variaveis globais em um array.
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION
//$_SERVER


//01 - $GLOBALS - Aramezena todas as variaveis globais em um array?
echo "<p>01 - GLOBALS- Aramezena todas as variaveis globais em um array</p>";
$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y']; //Chamando a variaves x e y com a $GLOBALS dentro da função.
}

soma();

echo "<hr>";

//02 - $_SERVER - contem informações de cabeçarios, caminhos e locais de scripts. é um array que contem varios indices.?
echo "<p>02 - SERVER - contem informações de cabeçarios, caminhos e locais de scripts. é um array que contem varios indices..</p>";

echo $_SERVER['PHP_SELF']."<br>";//Retorna o nome do arquivo do script que está sendo executado.
echo $_SERVER['SERVER_NAME']."<br>";//O nome do servidor onde o script está sendo executado.
echo $_SERVER['SCRIPT_FILENAME']."<br>";//retorna o caminho absoluto do script.
echo $_SERVER['SERVER_PORT']."<br>";//retorna a porta do servidor web.
echo $_SERVER['DOCUMENT_ROOT']."<br>";//retorna o repositório raiz do script em execução.
echo $_SERVER['REMOTE_ADDR']."<br>";//retorna o endereço de IP de onde o usúario está acessando a pagina.

echo "<hr>";

?>




