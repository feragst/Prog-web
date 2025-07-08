<?php
include '../models/Suporte.php';
include '../controllers/ControlaSuporte.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomecliente = $_POST['nomecliente'];
    $emailcliente = $_POST['emailcliente'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $suporte = new Suporte($nomecliente, $emailcliente, $assunto, $mensagem);
    $controlaSuporte = new ControlaSuporte();

    $controlaSuporte->salvar($suporte);

    header("Location: ../views/cadastraSuporte.html");
}
