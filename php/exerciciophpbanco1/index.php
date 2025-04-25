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
    $valor = $_POST['nome'];
    $valorCPF = $_POST['CPF'];

    $sql = "INSERT INTO viajantes(nome, CPF) values (?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$valor, $valorCPF]);
    
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>

<body>
    <form method="post" action="">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>CPF</label>
        <input type="number" name="CPF">
        <button type="submit">Salvar</button>



    </form>

</body>

</html>