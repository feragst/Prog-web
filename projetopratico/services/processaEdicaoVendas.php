<?php
include '../models/Vendas.php';
include '../controllers/ControlaVenda.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idvenda'])) {
    $id = $_POST['idvenda'];
    $nomecliente = $_POST['nomecliente'];
    $produto = $_POST['produto'];
    $precototal = $_POST['precototal'];
 

    $venda = new Vendas($nomecliente, $produto, $precototal);
    $venda->setId($id);
    $controlaVenda = new ControlaVenda();

    $controlaVenda->atualizar($venda);

    header("Location: ../views/indexVendas.php");
    exit;
} 
