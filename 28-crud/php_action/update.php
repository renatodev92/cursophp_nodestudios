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

if(isset($_POST['btn-editar'])):
    $firstName = clear($_POST['firstName']);
    $lastName  = clear($_POST['lastName']);
    $email     = clear($_POST['email']);
    $age       = clear($_POST['age']);
    $id        = clear($_POST['id']);

    $sql = "UPDATE clientes SET nome = '$firstName', sobrenome='$lastName', email='$email', idade='$age' WHERE id = '$id' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "<script>
        alert('Dados alterado com sucesso!');
        </script> ";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] =  "<script>
        alert('Erro ao atualizar os dados.!');
        </script> ";
        header('Location: ../index.php?');
    endif;
endif;
?>