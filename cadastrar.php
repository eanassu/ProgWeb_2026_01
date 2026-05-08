<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
</head>
<body>
<?php
include_once 'conexao.php';
include_once 'FuncionarioDao.php';
include_once 'funcionario.php';

$funcionarioDao = new FuncionarioDao($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $re = $_POST['re'];
    $nome = $_POST['nome'];
    $formato = 'd/m/Y';
    $dataAdmissao = DateTime::createFromFormat($formato, $_POST['dataAdmissao']);
    $salario = $_POST['salario'];

    $funcionario = new Funcionario($re, $nome, $dataAdmissao->format("Y-m-d"), $salario);
    if ($funcionarioDao->insert($funcionario)) {
        echo "Funcionário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar funcionário.";
    }
}
?>
<a href="/ProgWeb">Voltar</a>
</body>
</html>