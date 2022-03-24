
<?php 
/* 
include()
A função include() do PHP tem como objetivo incluir (como o próprio nome diz) um arquivo dentro do outro quando acessado. Caso ocorra algum problema na inclusão deste, será apresentado um Warning (aviso) que não foi possível incluir o arquivo e continuará a exibição da página normalmente sem a inclusão do arquivo. A função include() aceita parâmetros via GET quando chama um arquivo. */

/* require( )
A função require() do PHP tem a mesma funcionalidade da função include(), citada acima, com a diferença que se caso o arquivo que você está incluindo não exista (ou não seja encontrado), será gerado um Fatal Error (erro fatal), paralizando a execução de qualquer script que venha após a linha do require(); outra divergência é o fato desta função não aceitar parâmetros via GET para o arquivo chamado. Caso você utilize este parâmetro, ele será ignorado. */

/* include_once( ) e require_once( )
As funções include_once() e require_once() do PHP tem as suas funcionalidades praticamente “idênticas” às funções include() e require(), respectivamente. Digo “idênticas” (entre aspas) pois a única diferença entre elas é o fato da funções que possuem o “_once” só permitirem a inclusão do arquivo uma única vez na página e ignorando caso você chame ela mais vezes sem notar. */
?>
<?php 
    
    include_once 'header.php';

?>


<?php 
    
    echo "Eu sou o arquivo index que faz as requisições.";

?>


<?php 
    
    require_once 'footer.php';

?>


