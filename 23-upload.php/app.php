<?php 
//Verificando se o formulário foi clicado.

//Se existe a propiedade enviar da variavel $_POST.
if(isset($_POST['enviar'])):
    //Cria uma array com os formatos permitidos.
    $formatosPermitidos = ['pdf'];
    //Acessando a super global $_FILES.
    var_dump($_FILES); //Super global $_FILES exibe os dados do arquivo.
    echo "<br>";
    //Com a função pathinfo conseguimos verificar a extensão do aqruivo.
    $extensaoDoArquivo = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    //Exibindo a extensão do arquivo.
    echo "Extensão do arquivo enviado:$extensaoDoArquivo<br><br>";

    //Fazendo a verificação do arquivo.
    ///in_array verifica se um determinado valor existe em alguma posição do array.
    if(in_array($extensaoDoArquivo, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensaoDoArquivo";

        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            $numeroDeProtocolo = uniqid();
            $mensagem = "Upload feito com sucesso!.<br> Numero de protocolo: $numeroDeProtocolo<br><br>";
        else: 
            $mesagem  = "Não foi possivel realizar Upload!";
        endif;
        else:
           $mensagem  = "Formato inválido";
    endif;

    echo $mensagem;

endif;
?>