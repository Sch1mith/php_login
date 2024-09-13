<?php

class Pessoa
{
    private $nome;
    private $login;
    private $senha;

    public function __construct($nome, $login, $senha)
    {
        $this->$nome = $nome;
        $this->$login = $login;
        $this->$senha = $senha;
    }

    public function getNome()
    {
        return $this->$nome;
    }

    public function setNome($nome)
    {
        $this->$nome = $nome;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->$login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($newSenha)
    {
        $this->$senha = $newSenha;
    }
}

?>