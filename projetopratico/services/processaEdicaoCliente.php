<?php
include 'Cliente.php';
include 'ControlaCliente.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idcliente'])) {
    $id = $_POST['idcliente'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];

    $cliente = new Cliente($nome, $email, $idade, $genero);
    $cliente->setId($id);
    $controlaCliente = new ControlaCliente();

    $controlaCliente->atualizar($cliente);

    header("Location: index.php");
    exit;
} 
