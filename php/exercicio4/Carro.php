<?php

class Carro
{
    private $marca;
    private $modelo;
    private $anoFab;



    public function __construct($marca, $modelo, $anoFab)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFab = $anoFab;
    }

    public function exibirFicha()
    {
        echo "Nome : $this->marca <br>";
        echo "Nome : $this->modelo <br>";
        echo "Idade : $this->anoFab";
    }
}
