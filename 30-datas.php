<?php 
//Datas


date_default_timezone_set('America/Sao_Paulo');//Setendo o horário por região.
echo date('d/m/Y H:i:s A'); //A função data retorna uma dta de vários formatos.
echo "<br>";
echo "<br>";

//Armazenando datas no banco de dados.
// o banco trabalha com duas colunas para exibir datas.
//date: armazena data
//datetime:armazena data e horário.

$date = date('Y-m-d'); //DATE - BANCO DE DADOS
echo $date;
echo "<br><br>";


$dateTime = date('Y-m-d H:i:s');//DATE TIME - BANCO DE DADOS
echo $dateTime;
echo "<br><br>";

//TIME - Retorna a quantidade de segundos de 1970 até agora.
echo time();
echo "<br><br>";

//Formatando a função time

$time = time();
echo date('d/m/Y', $time);
echo "<br><br>";

//MKTIME

$datadepagamento = mktime(18,13,00,03,25,2024);
echo date('d/m - h:i', $datadepagamento);


?>