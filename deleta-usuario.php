<?php
require_once('Usuario.php');
session_start();

function remover(array $usuario,
                 string $nome): array
    {
        $indice = array_search($nome, $usuario);
        if ($indice !== false) {
            unset( $usuario[$indice]);
        }
        return $usuario;
    }   

if (isset($_GET['_nome']))
{
    $usuario->remover($_GET['_nome']);
}

// header('Location: index.php');