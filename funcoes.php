<?php

function addUsuario(array $usuarios, string $nome, string $sexo, string $perfil, string $data, string $senha) 
{
    $usuarios[] = [
        "nome"=>$nome,
        "sexo"=>$sexo,
        "perfil"=>$perfil,
        "data"=>$data,
        "senha"=>$senha
    ];
}