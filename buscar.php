<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Funcionário</title>
</head>
<body>
<?php
include_once 'conexao.php';
include_once 'Funcionario.php';
include_once 'FuncionarioDAO.php';

$re = $_POST['re'];

$funcionarioDAO = new FuncionarioDAO($conn);
$funcionario = $funcionarioDAO->buscarPeloRe($re);
$formato = "Y-m-d";
if ($funcionario) {
    // Exibir os dados do funcionário em um formulário para edição
    $dataAdmissao = DateTime::createFromFormat($formato, $funcionario->getDataAdmissao());
    ?>
    <form action="alterar.php" method="post">
        <input type="hidden" name="re" value="<?php echo $funcionario->getRe(); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $funcionario->getNome(); ?>">
        <br>
        <label for="dataAdmissao">Data de Admissão:</label>
        <input type="text" id="dataAdmissao" name="dataAdmissao" value="<?php echo $dataAdmissao->format('d/m/Y'); ?>">
        <br>
        <label for="salario">Salário:</label>
        <input type="text" id="salario" name="salario" value="<?php echo $funcionario->getSalario(); ?>">
        <br>
        <input type="submit" value="Alterar">
    </form>
    <?php
} else {
    echo "Funcionário não encontrado.";
}
?>
<a href="index.html">Voltar</a>
</body>
</html>