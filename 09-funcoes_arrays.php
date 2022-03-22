<?php 
/////////FUNÇÕES DE ARRAYS/////////

echo "<h1>Funcções de ARRAYS em PHP.</h1>";


//01 - is_array verifica se é um array.

echo "<h3>01 - is_array: verifica se é um array.</h3>";

$nomes = ['Renato', 'Larissa', 'Snow'];
var_dump(is_array($nomes)); 

if(is_array($nomes)):
    echo "É um array.<br>";
else:
    echo "Não é um array.<br>";
endif;
echo "<hr>";

//02 - in_array verifica se um determinado valor existe em alguma posição do array.

echo "<h3>02 - in_array: verifica se um determinado valor existe em alguma posição do array.</h3>";

$nomes = ['Renato', 'Larissa', 'Snow'];
echo in_array("Renato", $nomes); //Verifica se existe o "Renato" no array de $nomes.
echo "<br>";

if(in_array("Renato", $nomes)):
    echo "Existe no array.<br>";
else:
    echo "Não existe no array.<br>";
endif;
echo "<hr>";

//03 - array_keys retorna um novo array com as chaves do array passado como parametro.

$nomes = ['marido'=>'Renato', 'esposa'=>'Larissa', 'cachorro'=>'Snow'];

echo "<h3>03 - array_keys: retorna um novo array com as chaves do array passado como parametro.</h3>";

$names = array_keys($nomes); //Criou um novo array com os indices do array $nomes.
print_r($names);
echo "<hr>";

//04 - array_values retorna um novo array com os valores do array passado como parametro.

echo "<h3>04 - array_values: retorna um novo array com os valores do array passado como parametro.</h3>";

$nomes = ['Renato', 'Larissa', 'Snow'];
$values = array_values($nomes); // A função pegou os valores do array e retornou.
var_dump($values);
print_r($values);

echo "<hr>";

//05 - array_merge: agrega o conteúdo de 2 arrays.

echo "<h3>05 - array_merge: agrega o conteúdo de 2 arrays.</h3>";

$carros = ['Camaro', 'Uno', 'Gol'];
$motos  = ['Pop100', 'Harley', 'Kavazaki Nija'];

$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo "<hr>";

//06 - array_pop: exclui a ultima posição do array.
echo "<h3>06 - array_pop: exclui a ultima posição do array.</h3>";

$carros = ['Camaro', 'Uno', 'Gol'];
print_r($carros);
echo "<br>";


array_pop($carros);
print_r($carros);
echo "<br>";

echo "<hr>";

//06 - array_shift: exclui a primeira posição do array.
echo "<h3>06 - array_shift: exclui a primeira posição do array.</h3>";

$motos  = ['Pop100', 'Harley', 'Kavazaki Nija'];
print_r($motos);
echo "<br>";


array_shift($motos);
print_r($motos);
echo "<br>";

echo "<hr>";

//07 - array_unshift: adiciona um ou mais elementos no incio do array.
echo "<h3>07 - array_unshift: adiciona um ou mais elementos no incio do array.</h3>";

$frutas = ["Uva", "Laranja", "Maça"];
print_r($frutas);
echo "<br>";

array_unshift($frutas, "Manga", "Pessego", "Banana"); //Adicionando news $frutas no inicio do array.
print_r($frutas);

echo "<hr>";

//08 - array_push: adiciona um ou mais elementos no final do array.
echo "<h3>08 - array_push: adiciona um ou mais elementos no final do array.</h3>";

$legumes = ["Pepino", "Cenoura", "Chuchu"];
print_r($legumes);
echo "<br>";

array_push($legumes, "Pimenta", "Abobrinha", "Batata"); //Adicionando news $legumes no final do array..
print_r($legumes);

echo "<hr>";

//09 - array_combine: mescla dois arrays(indice/valor) ou (chave/valor).
echo "<h3>09 - array_combine: mescla dois arrays(indice/valor) ou (chave/valor).</h3>";

$indices = ["Campeao", "Vice", "Terceiro"];
print_r($indices);
echo "<br>";

$valores = ["Palmeiras","São Paulo","Corinthians"];
print_r($valores);
echo "<br>";

$times = array_combine($indices, $valores);
print_r($times);
echo "<hr>";

//10 - array_sum: calcula e soma os elementos de um array.
echo "<h3>10 - array_sum: calcula e soma os elementos de um array.</h3>";

$soma = [100,100,200,300];
print_r($soma);
echo "<br>";

echo "Total: ".array_sum($soma);
echo "<br>";
$total = array_sum($soma);
echo "Valor total: $total";
echo "<hr>";

//11 - explode: tranforma uma string em um array.
echo "<h3>11 - explode: tranforma uma string em um array.</h3>";

$data = "24/11/1992";
$novaData = explode('/',$data);//Com a função explode passamos o delimitador e o nome da váriavel com parametro.
print_r($novaData);
echo "<br>";

$frase = "Meu-nome-não-é-Renato.";
$resultado = explode('-', $frase);//Com a função explode passamos o delimitador e o nome da váriavel com parametro.
print_r($resultado);
echo "<br>";
echo "<hr>";

//12 - implode: tranforma o array em uma string.
echo "<h3>12 - implode: tranforma o array em uma string.</h3>";

$names = array ('Rodrigo','Carlos','Neusa','Talita');
$string = implode(',', $names);//Com a função explode passamos o delimitador e o nome da váriavel com parametro.
echo $string;




















?>