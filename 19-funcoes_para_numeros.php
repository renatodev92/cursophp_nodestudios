<?php 

/////FUNÇÕES PARA NÚMEROS/////
echo "<h1>FUNÇÕES PARA NÚMEROS</h1>";

//01 - number_format: trata o número para um formato valido.
echo "<p>01 - number_format: trata o número para um formato valido. </p>";

$preco = 1250.56;

//Tratando os dados com a função number format
//1° parametro -  a variavel a ser formatada
//2° parametro - a quantidade de cadas decimais.
//3° parametro - separador decimal no caso usamos a , (virgula)
//4° parametro - serparador de milhares. usamos o .(ponto).
$precoFormatado = number_format($preco, 2, ",",".");
echo "Valor total do produto R$: $precoFormatado.";

echo "<hr>";

//02 - roud: função para arredondar um número pra cima e pra baixo.
echo "<p>02 - roud: função para arredondar um número pra cima e pra baixo.</p>";
echo round(3.8);
echo "<hr>";

//03 - ceil: função para arredondar um número somente para cima.
echo "<p>03 - ceil: função para arredondar um número somente para cima.</p>";
echo ceil(2.1);//Arredondou pra 3. Essa função só arredonda pra cima.
echo "<hr>";

//04 - floor: função para arredondar um número somente para baixo.
echo "<p>04 - floor: função para arredondar um número somente para baixo.</p>";
echo floor(90.99);//Arredondou pra 90. Essa função só arredonda pra baixo.
echo "<hr>";

//05 - rand: utilizado para gerar um número aleatório.
echo "<p>05 - rand: utilizado para gerar um número aleatório.</p>";
echo rand(1,20);//Gerando número aleatórios de 1 a 20.
echo "<hr>";

?>