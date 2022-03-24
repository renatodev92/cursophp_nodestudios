<?php 
     /* FILTROS DE VALIDAÇÃO
     Funções(filter_input - filter_var)
     //Abaixo alguns filtros de validação
     //FILTER_VALIDATE_INT
     //FILTER_VALIDATE_EMAIL
     //FILTER_VALIDATE_FLOAT
     //FILTER_VALIDATE_IP
     //FILTER_VALIDATE_URL
     //https://www.php.net/manual/pt_BR/filter.filters.validate.php.
    */

    /* FILTROS DE SANITIZAÇÃO(LIMPEZA)
     Funções(filter_input - filter_var)
     //FILTER_SANITIZE_SPECIAL_CHARS
     //FILTER_SANITIZE_SPECIAL_NUMBER_INT
      //FILTER_SANITIZE_SPECIAL_EMAIL
    //FILTER_SANITIZE_SPECIAL_URL
     //https://www.php.net/manual/pt_BR/filter.filters.sanitize.php.
    */
?>

<?php 
//////////VALIDAÇÃO DOS DADOS DO FORMULÁRIO EM PH//////////
//Se existe um indice na $_POST = ['enviar'] é porque alguem clicou no botão enviar.
if(isset($_POST['enviar'])):
    //Criando um array de erros para exibir os erros.
    $erros = array();

    //VALIDAÇÃO E LIMPEZA(SANITIZE) DO FORMULÁRIO.

        //Aplicando a limpeza do campo'nome com o filter_input'.
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        

      

        //Aplicando a limpeza do campo'idade'com o filter_input'.
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        //Se idade não for do tipo inteiro. Retorna um erro.
        if(!filter_var($idade, FILTER_VALIDATE_INT)):
            $erros[] = "Campo ('idade') está inválido. Precisa ser um número inteiro.";
        endif;    
        
        
        //Aplicando a limpeza do campo'email'com o filter_input'.
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
         //Se email não for válido. Retorna um erro.
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            $erros[] = "Campo ('email') está inválido.";
        endif; 
        

         //Aplicando a limpeza do campo'url'com o filter_input'.
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
         //Se url não for válida. Retorna um erro.
        if(!filter_var($url, FILTER_VALIDATE_URL)):
            $erros[] = "Campo ('url') está inválido.";
        endif;
        
        //EXIBINDO UMA MENSAGEM APÓS ENVIVO DO FORMULÁRIO.
        //Se o array erros não estiver vazio, salva os erros do array e exibe na tela os erros.
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo "<li> $erro </li>";
                endforeach;
            else: 
                echo "Parabéns! Dados enviados com sucesso!";
            endif;
endif;
?>