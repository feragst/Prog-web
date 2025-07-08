<?php

class Vendas
{
    private $idvenda;
    private $nomecliente;
    private $produto;
    private $precototal;
 

    public function __construct($nomecliente, $produto, $precototal)
    {
        $this->nomecliente = $nomecliente;
        $this->produto = $produto;
        $this->precototal = $precototal;

    }

    public function getId()
    {
        return $this->idvenda;
    }

    public function setId($idvenda)
    {
        $this->idvenda = $idvenda;
    }

    public function getNome()
    {
        return $this->nomecliente;
    }

    public function setNome($nomecliente)
    {
        $this->nomecliente = $nomecliente;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    public function getPrecoTotal()
    {
        return $this->precototal;
    }

    public function setPrecoTotal($precototal)
    {
        $this->precototal = $precototal;
    }

}
