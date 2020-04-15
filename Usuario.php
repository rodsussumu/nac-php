<?php
    class Usuario
    {
        private string $nome;
        private string $sexo;
        private array $perfil;
        private string $data;
        private string $senha;

    public function __construct(string $nome, string $sexo, array $perfil, string $data, string $senha) 
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->perfil = $perfil;
        
        $original_date = $data;
        $timestamp = strtotime($original_date);
        $new_date = date("d/m/Y", $timestamp);
        $this->data = $new_date;

        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getData() {
        return $this->data;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function remover(String $nome):void
    {
       echo $nome;
    }

}