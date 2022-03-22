<?php 
//Constantes
//É uma variavel em que o valor não pode ser alterado

//Criando uma constante em PHP
//Constantes em PHP devem ser definidas com o nome em maisculo e não precisam do sinal de $ (dolar).


//Use o define para criar uma constante.
define("NOME", "Renato de Oliveira");
define("IDADE", 24);
define("ALTURA", 1.65);
define("CASADO", true);



//Exibindo a constante na tela e com var_dump.

echo 'Meu nome é ' .NOME. 'tenho ' .IDADE. ' anos, e ' .ALTURA. 'mt de altura.<hr>';


var_dump(NOME);
echo "<br><hr>";

var_dump(IDADE);
echo "<br><hr>";

var_dump(ALTURA);
echo "<br><hr>";

var_dump(CASADO);
echo "<br><hr>";

//////DEFININDO CONSTANTES DO TIPO ARRAY/////
define("TIMES", ['Corinthians','São Paulo','Palmeiras','Santos']);

echo 'Esse são os times: ' .TIMES[0]. ', '.TIMES[1]. ', '.TIMES[2].', '.TIMES[3].'.<hr>';

//////DEFININDO CONSTANTES DO TIPO ARRAY/////

echo "Outra forma de declarar constantes em PHP";

const SEXO = "Masculino";
var_dump(SEXO);



?>