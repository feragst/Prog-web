<?php

class Pessoa
{
    private $nome;
    private $idade;



    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function mostrarAtributos()
    {
        echo "Nome : $this->nome <br>" ;
        echo "Idade : $this->idade";
    }
}
