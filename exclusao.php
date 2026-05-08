<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Funcionário</title>
</head>
<body>
    <form action="excluir.php" method="post">
        RE:<input type="text" id="re" name="re" required>
        <input type="submit" value="Excluir">
    </form>
    <a href="index.html">Voltar</a>
</body>
</html>