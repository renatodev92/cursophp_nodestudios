<?php 

//Conectando com o banco de dados.
include_once 'php_action/db_connect.php';

//Header
include_once 'includ/header.php';

//Mensagem
include_once 'includ/mensagem.php';
?>



<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <h1 class="primary">Painel de clientes</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12"></div>
            <table  class="table table-striped">
                <thead>
                    <tr>
                        <th>ID:</th>
                        <th>NOME:</th>
                        <th>SOBRENOME:</th>
                        <th>EMAIL:</th>
                        <th>IDADE:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                      $sql = "SELECT * FROM clientes";
                      $resultado = mysqli_query($connect, $sql);
                      while($dados = mysqli_fetch_array($resultado)):
                    ?>
                        <tr>
                            <td><?php echo $dados['id']; ?></td>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['sobrenome'];?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['idade']; ?></td>
                            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="link-warning">Editar</a></td>
                            <td><a href="php_action/delete.php?id=<?php echo $dados['id']; ?>" class="link-danger">Deletar</a></td>
                        </tr>
                  <?php endwhile; ?>   
                </tbody>
            </table>
            <br>
            <a href="adicionar.php">Adicionar Cliente</a>
        </div>
    </div>
</div>


<?php 
    //Footer
    include_once 'includ/footer.php';
?>
