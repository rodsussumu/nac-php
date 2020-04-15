<?php
require_once('Usuario.php');
session_start();

if(isset($_POST['cadastrar'])) {
  $_SESSION["usuarios"][] = new Usuario($_POST["nome"], $_POST["sexo"], $_POST["perfil"], $_POST['data'], $_POST["senha"]);
} 

header('Location: index.php');