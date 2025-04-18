<?php

class Produto
{
    private $nome;
    private $preco;



    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function exibirInformacoes()
    {
        echo "Nome : $this->nome <br>";
        echo "Preço: $this->preco";
    }
}
