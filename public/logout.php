<?php 

  // Verificação para saber se passou pelo index, primeiro
  defined("CONTROL") or die("Acesso negado!");

  // Destrui sessão
  session_destroy();

  // Redirecionamento
  header("location: index.php?rota=login");
?>