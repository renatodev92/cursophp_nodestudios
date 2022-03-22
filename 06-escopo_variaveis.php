<?php 
//Escopo de variaveis

$nome = "Renato Oliveira"; // Variavel declarada escopo global
$a = 1;// Variavel declarada escopo global
$b = 3;// Variavel declarada escopo global
$c = 7;// Variavel declarada escopo global


//Criando uma função para exibir nome.
function exibeNome() {
    global $nome; //Definindo a varivel $nome como global
    echo "Meu nome é $nome.<br>";
}


//Chamando a função
exibeNome();

//////////////////////////////////////////////
//Variaveis criadas dentro de uma function são criadas dentro do escopo local. Para que ela se torne global e possamos chamala fora da função, temos que definila como global, dentro da função.

function exibiCidade() {
    //Definindo a variavel escolo GLOBAL
    global $cidade;
    $cidade = "Rio de Janeiro<br>";
}

//Como a variavel ficou global, conseguimos acessa-la de fora da função.
exibiCidade();
echo $cidade;

function soma() {
   //Chamando as váriasveis globais $a, $b e $c para função.
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 
}

echo "O resultado da soma de $a + $b + $c é ";
soma();

?>