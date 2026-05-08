<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis PHP</title>
</head>
<body>
<?php
$nome = "João";
$idade = 25;
$altura = 1.75;

echo 'Nome: ' . $nome . '<br>';
echo 'Idade: ' . $idade . ' anos<br>';
echo 'Altura: ' . $altura . ' m<br>';

// quando usamos ', as variáveis não são interpretadas
echo 'Nome: $nome<br>';
echo 'Idade: $idade anos<br>';
echo 'Altura: $altura m<br>';
// quando usamos ", as variáveis são interpretadas
echo "Nome: $nome<br>";
echo "Idade: $idade anos<br>";
echo "Altura: $altura m<br>";

?>
</body>
</html>