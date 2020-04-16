<?php
require_once('Usuario.php');
session_start();

if (isset($_GET['_indice']))
{
    // print_r(array_keys($_SESSION["usuarios"]));
    // print_r($_SESSION["usuarios"]);
    unset($_SESSION["usuarios"][$_GET['_indice']]);

}

header('Location: index.php');