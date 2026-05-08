<?php
include_once 'conexao.php';

$username = 'admin';
$password = 'senha123';
$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
$stmt->bind_param('ss', $username, $hash);
$stmt->execute() or die($stmt->error);
echo "Usuario criado";
$stmt->close();
$conn->close();
?>