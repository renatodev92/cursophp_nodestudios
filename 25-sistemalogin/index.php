<!DOCTYPE html>
<?php 

require_once 'model.php';

?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <center>
        <header style="padding:10px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6" >
                        <h1 center>Login</h1>
                    </div>
                    <div class="col-12 col-md-6" >
                    <img src="https://img.icons8.com/external-inipagistudio-mixed-inipagistudio/64/000000/external-system-industrial-manufacturing-inipagistudio-mixed-inipagistudio.png"/>
                    </div>
                </div>
            </div>
        </header>
        

        
        
        <?php

        //Se a varivael $erros não estiver vazia !emply(exiba os erros)
        if(!empty($erros)):
            foreach($erros as $erro):
                echo $erro;
            endforeach;
        endif;

        ?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        Login: <input type="text" name="login"><br><br>
                        Senha: <input type="password" name="password"><br><br>
                    <button class="btn btn-primary" type="submit" name="btn-logar">Acessar o sistema</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </center>
    
</body>
</html>