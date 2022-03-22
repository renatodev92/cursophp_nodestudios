<?php 
/////Condicinais em PHP/////
echo "<h1>Condicionais em PHP.</h1>";

//01 - IF: Verifica se a condição é verdadeira.
echo "<h3>01 - IF: Verifica se a condição é verdadeira.</h3>";

$numero = 10;

if($numero == 10):
    echo "É igual a 10.";
endif;

echo "<hr>";

//02 - IF/ELSE: Verifica se a condição é verdadeira ou falsa.
echo "<h3>02 - IF/ELSE: Verifica se a condição é verdadeira ou falsa.</h3>";

$idade = 18;

if($idade < 18):
    echo "Você é menor de idade.";
else: 
    echo "Você é maior de idade.";
endif;
echo "<hr>";

//03 - IF/ELSEIF/ELSE: Verifica mais condições
echo "<h3>03 - IF/ELSEIF/ELSE: Verifica se a condição é verdadeira ou falsa.</h3>";

$idade = 41;

if($idade < 18):
    echo "Você é menor de idade.";
elseif($idade >= 18 && $idade < 41):
    echo "Você é jovem.";
else: 
    echo "Você anda um pouco velho....";
endif;
echo "<hr>";

//04 - OPERADOR TERNARIO: Verifica se a condição é verdadeira ou falsa de forma mais simples.
echo "<h3>04 - OPERADOR TERNARIO: Verifica se a condição é verdadeira ou falsa de forma mais simples.</h3>";

$media = 5;
echo ($media >= 7)? "Sua média foi $media Aprovado!" : "Sua média foi $media Reprovado!";
echo "<hr>";

//05 - Switch/Case - para cada verificação retorna um resultado.
echo "<h3>05 - Switch/Case - para cada verificação retorna um resultado.</h3>";

$cor = "Vermelho";

switch ($cor):
    case "Vermelho";
    echo "Sua cor preferida é vermelho.";
    break;// break para a execução caso encontre a condição.

    case "Azul";
    echo "Sua cor preferida é azul.";
    break;

    case "Verde";
    echo "Sua cor preferida é verde.";
    break;

    default:
    echo "Sua cor preferida não é: Vermelho, Azul ou Verde.";


endswitch;



?>