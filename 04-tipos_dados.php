<?php 
//Tipos de dados suportados pelo PHP.

/*************** ESCALARES ****************/

//string

echo "<h3>String</h3>";
$nome = "Renato de Oliveira";
var_dump($nome); // A função var_dump exibe os dados e o tipo de varivel.

if(is_string($nome)):
    echo "É uma string!";
else:
    echo "Não é uma string";
endif;

echo "<hr>";

//number

echo "<h3>Number</h3>";
$idade = 29;
var_dump($idade); // A função var_dump exibe os dados e o tipo de varivel.
if(is_int($idade)):
    echo "É um numero inteiro!";
else:
    echo "Não é um número inteiro!";
endif;
echo "<hr>";

//float

echo "<h3>Float</h3>";
$altura = 1.65;
var_dump($altura); // A função var_dump exibe os dados e o tipo de varivel.
if(is_float($altura)):
    echo "É um Float!";
else:
    echo "Não é um float!";
endif;
echo "<hr>";

//boolean

echo "<h3>Boolean</h3>";
$admin = true;
var_dump($admin); // A função var_dump exibe os dados e o tipo de varivel.
if(is_bool($admin)):
    echo "É um boolean!";
else:
    echo "Não é um boolean!";
endif;
echo "<hr>";


/*************** COMPOSTOS ****************/

//Array é uma coleção de dados
 
echo "<h3>Array - Coleção de dados</h3>";
$carros = array ("Gol", 1200, 1.5, true); 
var_dump($carros); // A função var_dump exibe os dados e o tipo de varivel.
if(is_array($carros)):
    echo "É um array!";
else:
    echo "Não é um array!";
endif;
echo "<hr>";

//Objeto é uma coleção de dados com propiedade e metodos

class Cliente{
    public $nome;
    public function atribuirNome($nome) {
        $this->name = $nome;
    }
}

//Instanciando a classe 'CLIENTE'
echo "<h3>Objeto - Coleção de dados propiedade e valor.</h3>";
$cliente = new Cliente();
var_dump($cliente);
//Setando o o nome do cliente com o metodo atribuirNome
$cliente->atribuirNome('Renato de Oliveira');

var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto!";
else:
    echo "Não é um objeto!";
endif;
echo "<hr>";

/*************** ESPECIAIS ****************/

//Null
echo "<h3>Null - NULO</h3>";
$cidade = null;
var_dump($cidade);
if(is_null($cidade)):
    echo "É nulo!";
else:
    echo "Não é nulo!";
endif;
echo "<hr>";







?>