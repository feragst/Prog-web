<?php

include 'Carro.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anoFab = $_POST['anoFab'];

    $carro = new Carro($marca, $modelo, $anoFab);

    $carro->exibirFicha();
}
