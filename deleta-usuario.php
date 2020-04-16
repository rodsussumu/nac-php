<?php
require_once('Usuario.php');
session_start();

function procuraIndice(array $usuario, string $nome)
    {
        $indice = array_search($nome, $usuario);
    
        return $indice;
    }   

if (isset($_GET['_nome']))
{   
    // print_r(array_keys($_SESSION["usuarios"]));
    // print_r($_SESSION["usuarios"]);
    unset($_SESSION["usuarios"]);

}

header('Location: index.php');