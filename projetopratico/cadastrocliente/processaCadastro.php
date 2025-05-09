<?php
include 'Cliente.php';
include 'ControlaCliente.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];

    $cliente = new Cliente($nome, $email, $idade, $genero);
    $controlaCliente = new ControlaCliente();

    $controlaCliente->salvar($cliente);

    header("Location: cadastra.html");
}
