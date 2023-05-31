<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
include_once "Funcionario.php";
include_once "FuncionarioDao.php";
$re = intval($_GET["re"]);
$funcionario = new Funcionario($re,NULL,NULL,NULL);
$dao = new FuncionarioDao();
if ($dao->excluir($funcionario)) {
    echo "excluído";
} else {
    echo "não encontrado";
}
?>
</body>
</html>