<?php 
///////////CRIPTOGRAFIA///////////
/* Qual é a função da criptografia?
A criptografia é um recurso tecnológico fundamental para a proteção tanto dos dados que estão armazenados em dispositivos eletrônicos quanto das informações que circulam via Internet. */

echo "<h1>Criptografia</h1>";
echo "<p>Qual é a função da criptografia?
A criptografia é um recurso tecnológico fundamental para a proteção tanto dos dados que estão armazenados em dispositivos eletrônicos quanto das informações que circulam via Internet.</p>";

echo "<hr>";

//01 - base64_enconde:  base64_encode — Codifica dados com MIME base64..
echo "<p>01 - base64_enconde:  base64_encode — Codifica dados com MIME base64.<br>Com ela é possivel criptografar e descriptografar.</p>";


//Senha
$senha = "123456";
echo "Senha normal: $senha<br>";


//Codificando a senha
$novaSenha = base64_encode($senha);
echo "Senha codificada: $novaSenha<br>";

//Decodificando a senha
$senhaDecodificada = base64_decode($novaSenha);
echo "Senha decodificada: $senhaDecodificada<br>";
echo "<hr>";

//02 - md5: só é possivel criptografar. não tem como decriptografar. CUIDADO: Alguns sites quebram essa criptografia.
echo "<p>02 - md5: só é possivel criptografar. não tem como decriptografar.<strong>CUIDADO</strong>: Alguns sites quebram essa criptografia.</p>";

$senha = "123456";
echo "Senha normal: $senha<br>";

$novaSenha = md5($senha); //Lembre-se que para dar certo também temos que cadastrar o padrão md54 no banco de dados. Para que seja realizada a autenticação.
echo "Senha codificada: $novaSenha<br>";
echo "<hr>";

//03 - Sha1: só é possivel criptografar. não tem como decriptografar.CUIDADO: Alguns sites quebram essa criptografia.
echo "<p>03 - Sha1: só é possivel criptografar. não tem como decriptografar.<strong>CUIDADO</strong>: Alguns sites quebram essa criptografia.</p>";

$senha = "123456";
echo "Senha normal: $senha<br>";

$novaSenha = Sha1($senha); //Lembre-se que para dar certo também temos que cadastrar o padrão Sha1 no banco de dados. Para que seja realizada a autenticação.
echo "Senha codificada: $novaSenha<br>";
echo "<hr>";

//04 - password_rach: é um pouco mais seguro a criptografar. note que ao atualizar a página ele gera uma criptografia aleatória.:
echo "<p>04 - password_rach: é um pouco mais seguro a criptografar. <strong>note que ao atualizar a página ele gera uma criptografia aleatória.</strong></p>";

$senha = "1234568";
$senha_db = '$2y$10$he1iwvPjxIk/1cp4dy7sguC0b.yup.ZuxMt1OKBEB.jDxIbWIaYdu';
echo "Senha normal: $senha<br>";

$novaSenha = password_hash($senha, PASSWORD_DEFAULT); //Lembre-se que para dar certo também temos que cadastrar o padrão Sha1 no banco de dados. Para que seja realizada a autenticação.
echo "Senha codificada: $novaSenha<br><br>";

//Se a senha e a senha do banco de dados for a mesma.
if(password_verify($senha, $senha_db)):
    echo "Senha válida!";
else:
    echo "Senha inválida";
endif;

echo "<hr>";






?>