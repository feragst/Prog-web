<?php
include 'ControlaCliente.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaCliente = new ControlaCliente();
$controlaCliente->excluir($id);

header("Location: index.php");
exit;