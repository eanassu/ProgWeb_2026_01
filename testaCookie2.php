<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de cookie</title>
</head>
<body>
<?php
$cookie_name = "user";
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' está definido!<br>";
    echo "Valor: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '" . $cookie_name . "' não está definido!";
}
?>
</body>
</html>