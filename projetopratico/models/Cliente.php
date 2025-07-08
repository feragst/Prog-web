<?php

class Cliente
{
    private $idCliente;
    private $nome;
    private $email;
    private $idade;
    private $genero;

    public function __construct($nome, $email, $idade, $genero)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
        $this->genero = $genero;
    }

    public function getId()
    {
        return $this->idCliente;
    }

    public function setId($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
}
