<?php

include 'Produto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $produto = new Produto($nome, $preco);

    $produto->exibirInformacoes();

}
?>