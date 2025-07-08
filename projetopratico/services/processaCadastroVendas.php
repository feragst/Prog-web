<?php
include '../models/Vendas.php';
include '../controllers/ControlaVenda.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomecliente = $_POST['nomecliente'];
    $produto = $_POST['precototal'];
    $precototal = $_POST['produto'];


    $venda = new Vendas($nomecliente, $precototal, $produto);
    $controlaVenda = new ControlaVenda();

    $controlaVenda->salvar($venda);

    header("Location: ../views/cadastraVendas.html");
}
