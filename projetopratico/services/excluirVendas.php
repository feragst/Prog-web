<?php
include 'ControlaVenda.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaVenda = new ControlaVenda();
$controlaVenda->excluir($id);

header("Location: index.php");
exit;