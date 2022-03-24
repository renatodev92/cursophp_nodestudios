<?php 

//Incluindo a conexão com o banco de dados com o require_once.
require_once 'db_connect.php';

//Acicionando uma sessão
session_start();

// !isset =(se não existe) Se o usúario não estiver logado e tentarem acessar a home pela URL, irá redirecionar o úsuario para index.php.
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;



$id     = $_SESSION['id_usuario'];
$sql    = "SELECT * FROM usuarios WHERE id='$id' ";
$result = mysqli_query($connect, $sql);
$dados  = mysqli_fetch_array($result);
mysqli_close($connect);// Fechando a conexão com o banco de dados após a consulta.
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pagina Restrita</title>
</head>
<body>
    <center>
        <h1>Bem-vindo(a)!</h1>
        <h3>Olá 
            <?php 
                echo $dados['nome']; 
            ?>. 
        </h3>
        <a href="logout.php">Sair</a>
    </center>
</body>
</html>