<?php
    class Usuario
    {
        private string $nome;
        private string $sexo;
        private string $perfil;
        private string $data;
        private string $senha;
    

    public function __construct(string $nome, string $sexo, string $perfil, string $data, string $senha) 
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->perfil = $perfil;
        $this->data = $data;
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
}

