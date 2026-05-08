<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
</head>
<body>
    <h1>Cadastro de Funcionários</h1>
    <form action="cadastrar.php" method="POST">
        <label for="re">RE:</label>
        <input type="text" id="re" name="re"><br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="dataAdmissao">Data de Admissão:</label>
        <input type="text" id="dataAdmissao" name="dataAdmissao"><br>

        <label for="salario">Salário:</label>
        <input type="text" id="salario" name="salario"><br>

        <input type="submit" value="Cadastrar">
    </form>
    <a href="/ProgWeb">Voltar</a>
</body>
</html>