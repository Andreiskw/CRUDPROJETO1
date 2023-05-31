<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Busca</title>
</head>
<body>
<?php
include_once "FuncionarioDao.php";
include_once "Funcionario.php";
$re = intval($_GET["re"]);
$dao = new FuncionarioDao();
$f = $dao->buscarPeloRe($re);
$formato="Y-m-d";
$dataNascimento = 
  DateTime::createFromFormat($formato,$f->getDataNascimento());

?>
<form action="alterar.php">
RE:<input type="text" name="re" value="<?php echo $f->getRe()?>"/><br/>
Nome:<input type="text" name="nome" value="<?php echo $f->getNome()?>"/><br/>
Data de Nascimento:<input type="text" name="dataNascimento" 
  value="<?php echo $dataNascimento->format("d/m/Y") ?>"/><br/>
Salário:<input type="text" name="salario" value="<?php echo $f->getSalario()?>"/><br/>
</form> 

</body>
</html>