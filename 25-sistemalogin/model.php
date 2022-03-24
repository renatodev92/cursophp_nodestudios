<?php 

//Incluindo a conexão com o banco de dados com o require_once.
require_once 'db_connect.php';
//Iniciando uma sessão.
session_start();

// isset =(se existir o btn_logar na $_POST) executa o código abaixo.
if(isset($_POST['btn-logar'])):
    $erros    = [];
    //A função mysqli_real_scape_string() serve para limpar a string que, no caso, será enviada ao banco de dados. Essa função ajuda na prevenção de SQL Injection, pois não deixa que alguns caracteres como \n, ', ", entre outros qubrem sua query ou mesmo cheguem no seu BD e assim cause algum estrago.
    $log      = mysqli_escape_string($connect, $_POST['login']);
    $password = mysqli_escape_string($connect, $_POST['password']);

        //Se a variavel $log ou a variavel $password estiverem vazias.
        if(empty($log) or empty($password)):
            $erros[] = "<p> O campo login/senha precisam ser preenchidos!</p>";
        else:

            $sql    = "SELECT login FROM usuarios WHERE login='$log' ";
            $result = mysqli_query($connect, $sql);

                if(mysqli_num_rows($result) > 0):
                        
                    $password = md5($password);
                    $sql      = "SELECT * FROM usuarios WHERE senha='$password' and login='$log' ";    
                    $result   = mysqli_query($connect, $sql);
              
                    if(mysqli_num_rows($result) == 1):
                        $dados = mysqli_fetch_array($result);
                        mysqli_close($connect);// Fechando a conexão com o banco de dados após a consulta.
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];
                         header('Location: home.php');
                     else:
                        $erros[] = "<p>Usúario e senha não conferem.</p>";
                     endif;   
                else:
                $erros[] = "<p>Usúario não cadastrado!</p>"; 
                endif;      
     endif;
endif;
?>