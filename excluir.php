<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
include_once 'conexao.php';
include_once 'Funcionario.php';
include_once 'FuncionarioDAO.php';

$re = $_POST['re'];

$funcionarioDAO = new FuncionarioDAO($conn);
$f = new Funcionario($re, "", "", 0);
if ($funcionarioDAO->delete($f)) {
    echo "Funcionário excluído com sucesso.";
} else {
    echo "Erro ao excluir funcionário.";
}
?>
<br/>
<a href="index.html">Voltar</a>
</body>
</html>