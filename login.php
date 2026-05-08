<?php
// simples form de login
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Login</title></head>
<body>
  <h2>Login</h2>
  <form action="auth.php" method="post">
    <label>Usuário: <input type="text" name="username" required></label><br/>
    <label>Senha: <input type="password" name="password" required></label><br/>
    <button type="submit">Entrar</button>
  </form>
  <a href="index.html">Voltar</a>
</body>
</html>