<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Dados PHP</title>
</head>
<body>
<?php
$x = 1000;
$b = 0b111010101;
$o = 01234;
$hex = 0x1A3F;
echo PHP_INT_SIZE;
echo '<br>';
echo PHP_INT_MAX;
echo '<br>';
var_dump($x); 
echo '<br>';
$y = 3.14;
var_dump($y);
echo '<br>';
$z = "Olá, mundo!";
var_dump($z);
echo '<br>';
$b = true;
var_dump($b);
echo '<br>';
$b = 1;
var_dump($b);
?>
</body>
</html>