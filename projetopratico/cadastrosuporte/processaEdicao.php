<?php
include 'Suporte.php';
include 'ControlaSuporte.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idchamado'])) {
    $id = $_POST['idchamado'];
    $nomecliente = $_POST['nomecliente'];
    $emailcliente = $_POST['emailcliente'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $suporte = new Suporte($nomecliente, $emailcliente, $assunto, $mensagem);
    $suporte->setId($id);
    $controlaSuporte = new ControlaSuporte();

    $controlaSuporte->atualizar($suporte);

    header("Location: index.php");
    exit;
} 
