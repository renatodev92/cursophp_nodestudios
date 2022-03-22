<?php 
/////FOR/FOREACH PHP/////
echo "<h1>FOR/FOREACH PHP</h1>";

//Os loops for e foreach são usados ​​para funções iterativas, onde foreach é especialmente projetado para os arrays, enquanto for pode trabalhar normalmente com uma variável e um conjunto de variáveis..
echo "<p>Os loops for e foreach são usados ​​para funções iterativas, onde foreach é especialmente projetado para os arrays, enquanto for pode trabalhar normalmente com uma variável e um conjunto de variáveis.</p>";

//////////FOR///////////
echo "<h3>For</h3>";
//Segue o passo a passo
//1° $contador recebe 0
//2° enquanto $contador <= 10
//3° $contador recebe ele + 1
//4° enquantp a condição for verdadeira executa a $mensagem na tela.


for($contador = 0; $contador <=10; $contador++):
    $mensagem = "O contador é $contador <br>";
    echo $mensagem;
endfor;
echo "<hr>";

//////////FOREACH///////////
echo "<h3>Foreach</h3>";

$cores = ["Vermelho", "Amarelo", "Azul", "São cores primarias!"];
$cores2 = ["Laranja", "Roxo", "Verde", "São secundárias!"];
//Para cada item do array ele atribui a variavel resultado.
foreach($cores as $resultado):
    echo "$resultado<br>";
endforeach;


foreach($cores2 as $indice => $result):
    echo $indice. "-".$result."<br>";
endforeach;





?>