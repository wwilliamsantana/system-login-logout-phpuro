<?php
// Verificação para saber se passou pelo index, primeiro
defined("CONTROL") or die("Acesso negado!")





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  
  <form 
    action="index.php?rota=login"
    method="post"
  >
    <h3>Login</h3>
    <div>
      <label for="user">Usuário: </label>
      <input type="text" id="user" name="user">
    </div>
     <div>
      <label for="pass">Senha: </label>
      <input type="text" id="pass" name="pass">
    </div>
    <div>
      <button type="suubmit">Entrar</button>
    </div>
  </form>

</body>
</html>

