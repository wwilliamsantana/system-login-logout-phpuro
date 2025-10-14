<?php
// Verificação para saber se passou pelo index, primeiro
defined("CONTROL") or die("Acesso negado!");

// Verifica se o form foi submetido

if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  //Verifica os dados de login/senha
  $user = $_POST["user"] ?? null;
  $pass = $_POST["pass"] ?? null;
  $erro = null;

  if(empty($user) || empty($pass)){
    $erro = "Usuário e senha são obrigatórios!";
  }


}



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
    method="POST"
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


  <?php if(!empty($erro)): ?>
    <p style="color: red">
      <?= $erro ?>
    </p>
  <?php endif; ?>

</body>
</html>

