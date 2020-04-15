<?php
require_once('Usuario.php');
session_start();

$usuario = new Usuario();
if (isset($_GET['_nome']))
{
    $usuario->remover($_GET['_nome']);
}

// header('Location: index.php');