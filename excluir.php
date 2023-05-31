<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exclusão - resultado</title>
</head>
<body>
<?php
include_once "Funcionario.php";
include_once "FuncionarioDao.php";
$dao = new FuncionarioDao();
$re = $_GET["re"];
$f = new Funcionario($re,NULL,NULL,NULL);
if ($dao->excluir($f)) {
    echo "excluído";
} else {
    echo "não encontrado";
}
?>
<br/>
<a href="/crudn">voltar</a>

</body>
</html>