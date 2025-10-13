<?php

 /**
* Todo fluxo do código passará aqui
* Verificamos:
* Se tem uma sessão aberta
 * Se está logado ou não
 * Definir a rota
 * Iremos definir as rotas
  */

 // Init Session
 session_start();

 //Constante de controle
 define("CONTROL", ture);

 // Verificamos se existe um user logado
 $usuario_logado = $_SESSION["usuario"] ?? null;

 // Verificamos qual é a rota na URL
 if(empty($usuario_logado)){
  $rota = "login";
 }else{
  $rota = $_GET["rota"] ?? "home";
 }

 // Analisar a rota
 $rotas = [
  "login" => "login.php"
  "home" => "home.php"
 ]

 // Verificando e acessando a rota
 if(!key_exists($rota, $rotas)){
  die("Acesso negado!")
 }

  require_once $rotas[$rota]
 