<?php
require_once("modelo/aluno.php");
require_once("modelo/professor.php");

$aluno = new aluno();
$aluno->setmatricula(12345678);
$aluno->setnome("joao");
$aluno->setidade(16);
$aluno->setRg(5256162);

$professor = new professor();
$professor->setSalario(66666);
$professor->setnome("samuel");
$professor->setidade(66);
$professor->setRg(6666666666666 ."\n");

echo"R$". $professor->getSalario(). "\n";
