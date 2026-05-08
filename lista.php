<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
</head>
<body>
    <h1>Lista de Funcionários</h1>
    <table border='1'>
        <thead>
            <tr>
                <th>RE</th>
                <th>Nome</th>
                <th>Data de Admissão</th>
                <th>Salário</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'conexao.php';
            include_once 'FuncionarioDao.php';

            $funcionarioDao = new FuncionarioDao($conn);
            $funcionarios = $funcionarioDao->listarTodos();
            $formatoData = 'd/m/Y';
            $formatter = new NumberFormatter("pt_BR", NumberFormatter::CURRENCY);
            foreach ($funcionarios as $funcionario) {
                $dataAdmissao = DateTime::createFromFormat("Y-m-d", $funcionario->getDataAdmissao());
                $salario = $formatter->formatCurrency($funcionario->getSalario(), "BRL");
                echo "<tr>";
                echo "<td>" . $funcionario->getRe() . "</td>";
                echo "<td>" . $funcionario->getNome() . "</td>";

                if ( $dataAdmissao ) {
                   $data = $dataAdmissao->format($formatoData);
                } else { 
                    $data = "";
                }
                echo "<td>" . $data . "</td>";
                echo "<td>" . $formatter->formatCurrency($funcionario->getSalario(), "BRL") . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="/ProgWeb">Voltar</a>
</body>
</html>