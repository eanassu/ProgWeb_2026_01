<?php
session_start();
include_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  $stmt = $conn->prepare('SELECT password FROM users WHERE username = ?');
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $stmt->bind_result($hash);
  if ($stmt->fetch() && password_verify($password, $hash)) {
    $_SESSION['username'] = $username;
    header('Location: index.html');
    exit;
  } else {
    echo 'Usuário ou senha inválidos. <a href="login.php">Tentar novamente</a>';
  }
  $stmt->close();
}
$conn->close();
?>