<?php
include '../controllers/ControlaVenda.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaVenda = new ControlaVenda();
$controlaVenda->excluir($id);

header("Location: ../views/indexVendas.php");
exit;