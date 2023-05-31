<?php
include_once "Funcionario.php";
include_once "FuncionarioDao.php";
$re = intval($_GET["re"]);
$nome = $_GET["nome"];
$formato = "d/m/Y";
$dataNascimento = 
  DateTime::createFromFormat($formato,$_GET["dataNascimento"]);
$salario = floatval($_GET["salario"]);
$funcionario = 
  new Funcionario($re,$nome,$dataNascimento->format("Y-m-d"),$salario);
$dao = new FuncionarioDao();
if ($dao->alterar($funcionario)) {
    echo "alterado com sucesso";
} else {
    echo "Ocorreu erro na alteração";
}
?>