<?php
require_once('Usuario.php');
session_start();

if (isset($_GET['_indice']))
{
    unset($_SESSION["usuarios"][$_GET['_indice']]);
}

header('Location: index.php');