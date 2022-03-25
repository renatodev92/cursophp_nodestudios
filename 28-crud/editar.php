<?php 
//Conexão com o banco 
include_once 'php_action/db_connect.php';

//Header
include_once 'includ/header.php';


//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <h1 class="primary">Editar cliente</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <form action="php_action/update.php" method="POST">
                 <div class="mb-3">
                    <input type="hidden" name="id"  id="id" value="<?php echo $dados['id']; ?>">
                </div>

                <div class="mb-3">
                    <label for="firstName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $dados['nome']; ?>">
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Sobrenome:</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $dados['sobrenome']; ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $dados['email']; ?>">
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Idade:</label>
                    <input type="text" class="form-control" name="age" id="age" value="<?php echo $dados['idade']; ?>">
                </div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-primary" name="btn-editar">Atualizar dados</button>
                   <a href="index.php">Clientes</a>
                </div>
            </form>
            

        </div>
    </div>
</div>


<?php 
    //Footer
    include_once 'includ/footer.php';
?>
