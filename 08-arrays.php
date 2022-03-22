<?php 
//Trabalhando com arrays em PHP
//Vamos imaginar que você vai criar uma lista de compras de supermercado, podemos criar isso atraves de um array uma coleção de dados.

$lista_compras = array (1=>'Arroz', 2=>'Feijão',3=> 'Açucar', 4=>'Macarrão');

var_dump($lista_compras);
print_r($lista_compras);
echo "<br>";
echo "<hr>";

//Acessando o array pelo indice e exibindo na tela.
echo "<p>Acessando o array pelo indice e exibindo na tela.</p>";

echo $lista_compras[1] . '<br>';
echo $lista_compras[2] . '<br>';
echo $lista_compras[3] . '<br>';
echo $lista_compras[4] . '<br>';

echo "<hr>";

//Setando novos dados em um array que já existe.
echo "<p>Setando novos dados em um array que já existe.</p>";

$lista_compras[] = "Achocolatado";//Setando novos dados.
print_r($lista_compras);//Exibindo na tela
echo "<br>";
echo "<br>";

$lista_compras[1] = "Bolacha Salgada";//Setando novos dados em um indíce que já existe.
print_r($lista_compras);//Exibindo na tela

echo "<hr>";

//Setando novos dados em um array que já existe.
echo "<p>Outras formas de declarar um array em PHP</p>";

$cursos = [];
$cursos[] = 'PHP'; 
$cursos[] = 'PDO'; 
$cursos[] = 'MYSQL'; 
$cursos[] = 'JAVASCRIPT'; 

echo $cursos[0] . '<br>';
echo $cursos[1] . '<br>';
echo $cursos[2] . '<br>';
echo $cursos[3] . '<br>';

print_r($cursos);
echo "<br>";

echo "<p>Contando os elementos de um array</p>";

echo count($cursos);//Função count para exibir a quantidade de dados no array.
echo "<br>";

$total_cursos = count($cursos);
echo 'Total de cursos: ' . $total_cursos.'.';
echo "<br>";

echo "<hr>";


//Trabalhando com loops pra percorrer um array com foreach.
echo "<p>Trabalhando com loops pra percorrer um array com foreach</p>";

//Cada curso que está armazenado na variavel $cursos vai ser salvo na variavel $resultado e exibido na tela.
foreach($cursos as $resultado) {
    echo $resultado.'<br>';
}

echo "<hr>";

//////////ARRAYS ASSOCIATIVOS//////////
//Trabalhando com arrays associativos

echo "<p>Trabalhando com arrays associativos.</p>";

$pessoa = ["nome"=> "Renato", "sobrenome"=>"Oliveira", "idade"=> 29, "sexo"=>"masculino" ];

//Exibindo os dados na tela.
echo $pessoa['nome'] . '<br>';
echo $pessoa['sobrenome'] . '<br>';
echo $pessoa['idade'] . '<br>';
echo $pessoa['sexo'] . '<br>';

//Alterado dados.
echo "<p>Alterando dados com arrays associativos.</p>";


$pessoa['nome'] = 'Larrisa';
$pessoa['sobrenome'] = 'Tatiane';
$pessoa['idade'] = 23;
$pessoa['sexo'] = 'Feminino';
print_r($pessoa);

echo "<br>";
echo "<br>";

echo "<p>Exibindo o incide do array na tela com o foreach</p>";

foreach($pessoa as $indice => $valor) {
    echo $indice. ":". $valor."<br>";
}

echo "<hr>";

//////////ARRAYS MULTIDIMENSIONAIS - (Como se fosse o array de objetos em JS)//////////
//Trabalhando com arrays multidimensionais.

echo "<p>Trabalhando com arrays multidimensionais.</p>";

$times = array (
    "cariocas"  => array("Vasco","Flamengo","Fluminense","Botafogo"),
    "paulistas" => array("Saõ Paulo","Corinthians","Santos","Palmeiras"),
    "europeus"  => array("PSG","Manchester City","Real Madrie","Borussia")
);

//Exibindo os valores
echo "<p>Cariocas:</p>";

echo $times['cariocas'][0].'<br>';
echo $times['cariocas'][1].'<br>';
echo $times['cariocas'][2].'<br>';
echo $times['cariocas'][3].'<br>';

echo "<p>Paulistas:</p>";

echo $times['paulistas'][0].'<br>';
echo $times['paulistas'][1].'<br>';
echo $times['paulistas'][2].'<br>';
echo $times['paulistas'][3].'<br>';


echo "<p>Europeus:</p>";

echo $times['europeus'][0].'<br>';
echo $times['europeus'][1].'<br>';
echo $times['europeus'][2].'<br>';
echo $times['europeus'][3].'<br>';













?>