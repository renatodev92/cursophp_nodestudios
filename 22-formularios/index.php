<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<style>
    input{
        display: block;
    }

</style>

<body>
    <?php 
        //A declaração require é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível E_COMPILE_ERROR. Em outras palavras, ele parará o script enquanto que o include apenas emitirá um alerta (E_WARNING) permitindo que o script continue.

        //A expressão require_once é idêntica a require exceto que o PHP verificará se o arquivo já foi incluído, e em caso afirmativo, não o incluirá (exigirá) novamente.

        require_once 'validacao_form.php';
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <label for="idade">Nome:</label> 
       <input type="text" id="nome" name="nome">

       <label for="idade">Idade:</label> 
       <input type="text" id="idade" name="idade">

       <label for="email">Email</label>
       <input type="text" id="email" name="email">
    

       <label for="url">URL:</label> 
       <input type="text" id="url" name="url">

       <input type="submit" name="enviar">

    </form>

    
    
</body>
</html>