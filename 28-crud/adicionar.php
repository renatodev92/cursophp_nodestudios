<?php 
    
    //Header
    include_once 'includ/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <h1 class="primary">Novo cliente</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <form action="php_action/create.php" method="POST">
                <div class="mb-3">
                    <label for="firstName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="firstName" id="firstName'>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Sobrenome:</label>
                    <input type="text" class="form-control" name="lastName" id="lastName'>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email'>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Idade:</label>
                    <input type="text" class="form-control" name="age" id="age'>
                </div>
            </form>
            <div class="row">
                <div class="col-12 col-md-3">
                    <button type="submit" class="btn btn-success" name="btn-cadastrar">Cadastrar</button>
                   <a href="index.php">Clientes</a>
            </div>

        </div>
    </div>
</div>


<?php 
    //Footer
    include_once 'includ/footer.php';
?>
