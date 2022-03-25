<script>
    function deletar(){
        confirm('Deseja deletar os dados do usúario?');
    }
</script>



<?php 
//Iniciando uma sessão
session_start();


//Conexão com o banco de dados
require_once 'db_connect.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "DELETE FROM clientes WHERE id='$id' ";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "<script>
            alert('Dados excluidos com sucesso.');
            </script> ";
            header('Location: ../index.php?');
        else:
            $_SESSION['mensagem'] =  "<script>
            alert('Erro ao deletar usúario  .!');
            </script> ";
            header('Location: ../index.php?');
        endif;
endif;



    
?>