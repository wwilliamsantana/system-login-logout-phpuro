<?php
// Verificação para saber se passou pelo index, primeiro
defined("CONTROL") or die("Acesso negado!");

// Verifica se o form foi submetido

if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  //Verifica os dados de login/senha
  $user = $_POST["user"] ?? null;
  $pass = $_POST["pass"] ?? null;
  $erro = null;

  // Validando entradas
  if(empty($user) || empty($pass)){
    $erro = "Usuário e senha são obrigatórios!";
  }

  // Verifica se o usuário e senha são validos (match)
  if(empty($erro)){

    // Importando usuarios da pasta INC
    $usuarios = require_once __DIR__ . "/../inc/usuarios.php";

    foreach ($usuarios as $usuario) {
      // Verificando o user e password de entrada no form com nosso "banco de dados".

      if($usuario['usuario'] == $user && password_verify($pass, $usuario["senha"])){
        // Login
        $_SESSION["usuario"] = $user;
        // Redirecionamento 
        header("location: index.php?rota=home");
      }
    };

    $erro = "Usuário e/ou senha inválida!";
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

  <!-- Exibir error -->
  <?php if(!empty($erro)): ?>
    <p style="color: red">
      <?= $erro ?>
    </p>
  <?php endif; ?>

</body>
</html>

