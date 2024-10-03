<?php

/*função autoloas
*Carrega uma classe queando ela é necessária, ou seja, quando é instanciado
*pela primeira vez
*/

spl_autoload_register(function($classe){
    if(file_exists("{$classe}.class.php")){
        include_once "{$classe}.class.php";
    }
});

//cria um criterio de seleção de dados
$criteria=new TCriteria;
$criteria->add(new TFilter('id','=','3'));
//cria instrução de UPDATE
$sql= new TSqlUpdate;
//define a entidade
$sql->setEntity('aluno');
//atribui o valor de cada coluna
$sql->setRowData('nome','Pedro Cardoso da Silva');
$sql->setRowData('rua','machado de Assis');
$sql->setRowData('fone','(51)4441');

//processa instrução SQL
echo $sql->getInstruction();
echo"<br>\n";






?>