<?php
require 'auth_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Funcionário</title>
</head>
<body>
    <form action="buscar.php" method="post">
        <label for="re">RE:</label>
        <input type="text" id="re" name="re" required>
        <input type="submit" value="Buscar">
    </form>
    <a href="index.html">Voltar</a>
</body>
</html>