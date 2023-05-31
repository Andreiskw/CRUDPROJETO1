<?php
include_once "Funcionario.php";
include_once "FuncionarioDao.php";

$re = intval($_GET["re"]);
$nome = $_GET["nome"];
$formato = "d/m/Y";
$dataNascimentoStr = $_GET["dataNascimento"];
$salario = floatval($_GET["salario"]);

$dataNascimento = DateTime::createFromFormat($formato, $dataNascimentoStr);
if ($dataNascimento !== false) {
    $dataNascimentoFormatada = $dataNascimento->format("Y-m-d");

    $funcionario = new Funcionario($re, $nome, $dataNascimentoFormatada, $salario);
    $dao = new FuncionarioDao();

    if ($dao->inserir($funcionario)) {
        echo "Inserido com sucesso";
    } else {
        echo "Ocorreu erro na inserção";
    }
} else {
    echo "Ocorreu um erro!";
}

?>