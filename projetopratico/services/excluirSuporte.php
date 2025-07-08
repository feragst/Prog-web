<?php
include '../controllers/ControlaSuporte.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaSuporte = new ControlaSuporte();
$controlaSuporte->excluir($id);

header("Location: ../views/indexSuporte.php");
exit;