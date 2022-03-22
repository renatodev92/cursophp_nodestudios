<?php 

/////CRIANDO FUNÇÕES EM PHP/////
echo "<h1>CRIANDO FUNÇÕES EM PHP</h1>";

//01 - Como criar funções própias em PHP?
echo "<p>01 - Como criar funções própias em PHP?</p>";

//Criando uma função
function exibirNome() {
    echo "Meu nome é Renato de Oliveira.<br>";
}

//Chamando uma função
exibirNome();

//Criando uma função e passando um parametro.

function minhaEsposa($nome) {
    echo "Tenho uma esposa chamada $nome!<br>";

}

minhaEsposa('Larissa Tatiane');

echo "<hr>";

//02 - Criando uma função para cálculo de médias em PHP.
echo "<p>02 - Criando uma função para cálculo de médias em PHP.</p>";

$nome = "Renato";
$n1 = 10;
$n2 = 10;
$n3 = 5;
$n4 = 5;

function calcularMedia($nome, $n1,$n2,$n3,$n4) {
       $media = ($n1 + $n2 + $n3 + $n4) / 4;
       if($media >= 7):
        echo "$nome você foi aprovado com a média final de $media.<br>";
       else:
        echo "$nome, infelizmente você foi reporvado.<br>";
       endif;
}

calcularMedia($nome,$n1,$n2,$n3,$n4);

calcularMedia($nome,$n1,$n2,$n3,$n4);