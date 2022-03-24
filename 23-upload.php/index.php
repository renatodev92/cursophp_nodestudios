<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>

<!--Fazendo a requisição da lógica de negócio -->
<?php require_once 'app.php'; ?>

<form action="<?php  echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"><br><br>
    <input type="submit" name="enviar">
</form>
    
</body>
</html>