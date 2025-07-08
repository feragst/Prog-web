<?php
include '../controllers/ControlaCliente.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaCliente = new ControlaCliente();
$controlaCliente->excluir($id);

header("Location: ../views/indexCliente.php");
exit;