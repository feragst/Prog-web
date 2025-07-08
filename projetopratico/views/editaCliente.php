<?php
include '../controllers/ControlaCliente.php';

if (!isset($_GET['id'])) {
    die('ID do Cliente não informado.');
}

$controlaCliente = new ControlaCliente();
$cliente = $controlaCliente->buscarPorId($_GET['id']);

if (!$cliente) {
    die('Cliente não encontrado.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <a href="../index.php" class="home-button">🏠</a>
    <h2>Editar Cliente</h2>
    <form action="../services/processaEdicaoCliente.php" method="post">
        <input type="hidden" name="idcliente" value="<?= $cliente['idcliente'] ?>">
        <label>Nome completo</label>
        <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required>
        <label>Email</label>
        <input type="email" name="email" value="<?= $cliente['email'] ?>" required>
        <label>Idade</label>
        <input type="text" name="idade" value="<?= $cliente['idade'] ?>" required>
        <label>Genero</label>
        <input type="text" name="genero" value="<?= $cliente['genero'] ?>" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
