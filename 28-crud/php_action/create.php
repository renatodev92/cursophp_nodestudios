<?php 
//Iniciando uma sessão
session_start();


//Conexão com o banco de dados
require_once 'db_connect.php';

//Clear
function clear($input) {
    global $connect; // Tornando a variavel $connect como global.
    $var = mysqli_escape_string($connect, $input);//Limpando dos dados do inpup/sql injequition
    $var = htmlspecialchars($var);//Inpedindo que entre scripts maliciosos na aplicação.
    return $var;
}

if(isset($_POST['btn-cadastrar'])):
    $firstName = clear($_POST['firstName']);
    $lastName  = clear($_POST['lastName']);
    $email     = clear($_POST['email']);
    $age       = clear($_POST['age']);

    $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$firstName', '$lastName', '$email', '$age')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "<script>
        alert('Usúario cadastrado com sucesso!');
        </script> ";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] =  "<script>
        alert('Erro ao cadastrar cliente!');
        </script> ";
        header('Location: ../index.php?');
    endif;
endif;
?>
