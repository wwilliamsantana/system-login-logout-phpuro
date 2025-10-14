<?php
// Verificação para saber se passou pelo index, primeiro
  defined("CONTROL") or die("Acesso negado!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página 2</title>
</head>
<body>

  <?php require "nav.php" ?>
  <h3>Página 3</h3>
  <hr>
  <p>[conteúdo]</p>
</body>
</html>