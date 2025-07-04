<?php
include 'ControlaSuporte.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaSuporte = new ControlaSuporte();
$controlaSuporte->excluir($id);

header("Location: index.php");
exit;