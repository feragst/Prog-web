<?php

$host = "localhost";
$porta = "5432";
$database = "phphoje";
$usuario = "postgres";
$senha = "postgres";
$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);


//sql injection




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['codBarra'];
    $valorDescricao = $_POST['descricao'];
    $valorPreco = $_POST['preco'];

    $sql = "INSERT INTO produtos(codBarra, descricao, preco) values (?, ?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$valor, $valorDescricao, $valorPreco]);
    
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
</head>

<body>
    <form method="post" action="">
        <label>Código de Barras</label>
        <input type="text" name="codBarra">
        <label>Descrição</label>
        <input type="text" name="descricao">
        <label>Preço</label>
        <input type="number" name="preco">
        <button type="submit">Salvar</button>



    </form>

</body>

</html>