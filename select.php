<?php

spl_autoload_register(function ($classe) {
  if (file_exists("{$classe}.class.php")) {
      include_once "{$classe}.class.php";
  }
});

//cria criterio de seleção de dados 
$criteria = new TCriteria;
$criteria->add(new TFilter('nome','like','maria%'));
$criteria->add(new TFilter('cidade','like','Porto%'));

//define o intervalo de consulta

$criteria->setProperty('offset',0);
$criteria->setProperty('limit',10);

//define o ordenamento da consulta

$criteria->setProperty('orde','nome');

//cria instrução de SELECT
$sql = new TSqlSelect;

//define o nome da entidade
$sql->setEntity('aluno');

//acrescenta colunas 'a consulta
$sql->addColumn('nome');
$sql->addColumn('fone');

//define o critério de seleção dos dados 
$sql->setCriteria($criteria);

// processa a instrução SQL
echo $sql->getInstruction();    

echo "<br>\n";






?>