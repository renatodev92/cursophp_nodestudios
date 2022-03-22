<?php 
/////WHILE /DOWHILE PHP/////
echo "<h1>WHILE /DOWHILE PHP</h1>";

//01 - While: Enquanto uma condição for verdadeira ele vai executar o código.
echo "<p>01 - While: Enquanto uma condição for verdadeira ele vai executar o código.</p>";


//Enquanto o contador for menor ou igual a 10. 
//Contador recebe ele mesmo mais 1.


$contador = 1;
while($contador <= 10):
    echo "Contador é $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

//02 - DoWhile: Ele executa o trecho de código e depois faz a verificação se a condição é verdadeira ou não.
echo "<p>02 - DoWhile: Ele executa o trecho de código e depois faz a verificação se a condição é verdadeira ou não..</p>";

//Note que nesse exemplo ele executa pelo menos uma vez antes de fazer a verificação.
$contador = 1;

do {
    echo "Contador é $contador <br>";
    $contador++;
} while ($contador <= 0); 





?>