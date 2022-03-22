<?php 

/////FUNÇÕES PARA STRINGS/////
echo "<h1>FUNÇÕES PARA STRINGS</h1>";

//01 - strtoupper: converte uma strig em maiuscula.
echo "<p>01 - strtoupper: converte uma strig em maiuscula.</p>";

$nome = "renato de oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

//02 - strtolower: converte uma strig em minuscula.
echo "<p>02 - strtolower: converte uma strig em minuscula.</p>";

$nome = "LARISSA TATIANE";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

//03 - substr: retorna uma parte de uma string.
echo "<p>03 - substr: retorna uma parte de uma string.</p>";

$mensagem = "Olá mundo!";
echo substr($mensagem, 5);//Retorna o texto a partir do caracter 5.
echo "<br>";
echo substr($mensagem, 5, 3);//Retorna o texto a partir do caracter 5 e conta 3 caracteres.
echo "<hr>";

//04 - str_pad: ela acrecenta a uma uma quantidade especificada de caracteres em uma string que já existe.
echo "<p>04 - str_pad: ela acrecenta a uma uma quantidade especificada de caracteres em uma string que já existe.</p>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*");
echo $novoObjeto;
echo "<hr>";

//05 - str_reapeat: serve para repitir uma string q quantidade de vezes que quiser.
echo "<p>05 - str_reapeat: serve para repitir uma string q quantidade de vezes que quiser.</p>";

$string = str_repeat("Sucesso!", 5); //Repitindo 5 vezes a palavra sucesso.
echo $string;
echo "<hr>";

//06 - strlen: serve para retornar o cumprimento de uma string (inclusive os acentos e espaços).
echo "<p>06 - strlen: serve para retornar o cumprimento de uma string.(inclusive os acentos e espaços).</p>";

$message = "Olá mundo!";
echo strlen($message);
echo "<hr>";

//07 - str_replace: serve para substituir uma palvra em um texto.
echo "<p>07 - str_replace: serve para substituir uma palvra em um texto.</p>";

$texto = "A seleção do (Brasil) será campeã da copa do mundo no quatar em 2022.";
echo "$texto <br>";

$novoTexto = str_replace("Brasil", "Argentina", $texto);
echo "$novoTexto<br>";
echo "<hr>";

//08 - strpos: retorna a posição de uma palavra em um texto.
echo "<p>08 - strpos: retorna a posição de uma palavra em um texto.</p>";

$texto = "A seleção do (Brasil) será campeã da copa do mundo no quatar em 2022.";
echo "$texto <br>"; 

echo strpos($texto, "seleção");





?>