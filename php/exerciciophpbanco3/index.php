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
    $valor = $_POST['dataNasc'];
    $valorNome = $_POST['nome'];
    $valorSalario = $_POST['salario'];

    $sql = "INSERT INTO funcionarios2(dataNasc, nome, salario) values (?, ?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$valor, $valorNome, $valorSalario]);
    
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
</head>

<body>
    <form method="post" action="">
        <label>dataNasc</label>
        <input type="text" name="dataNasc">
        <label>nome</label>
        <input type="text" name="nome">
        <label>Preço</label>
        <input type="number" name="salario">
        <button type="submit">Salvar</button>



    </form>

</body>

</html>