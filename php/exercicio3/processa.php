<?php

include 'Pessoa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $pessoa = new Pessoa($nome, $idade);

    $pessoa->mostrarAtributos();

}
?>