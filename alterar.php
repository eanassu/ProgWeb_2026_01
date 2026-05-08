<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Funcionário</title>
</head>
<body>
<?php
include_once 'conexao.php';
include_once 'Funcionario.php';
include_once 'FuncionarioDAO.php';

$re = $_POST['re'];
$nome = $_POST['nome'];
$formato = "d/m/Y";
$dataAdmissao = DateTime::createFromFormat($formato, $_POST['dataAdmissao']);
$salario = floatval($_POST['salario']);

$funcionario = new Funcionario($re, $nome, $dataAdmissao->format('Y-m-d'), $salario);
$funcionarioDAO = new FuncionarioDAO($conn);
if ($funcionarioDAO->update($funcionario)) {
    echo "Funcionário alterado com sucesso.";
} else {
    echo "Erro ao alterar funcionário.";
}
?>
<a href="index.html">Voltar</a>
</body>
</html>