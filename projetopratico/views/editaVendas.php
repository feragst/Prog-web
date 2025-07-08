<?php
include '../controllers/ControlaVenda.php';

if (!isset($_GET['id'])) {
    die('ID do Venda não informado.');
}

$controlaVenda = new ControlaVenda();
$venda = $controlaVenda->buscarPorId($_GET['id']);

if (!$venda) {
    die('Venda não encontrado.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Venda</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <a href="../index.php" class="home-button">🏠</a>
    <h2>Editar Venda</h2>
    <form action="../services/processaEdicaoVendas.php" method="post">
        <input type="hidden" name="idvenda" value="<?= $venda['idvenda'] ?>">
        <label>Nome do cliente:</label>
        <input type="text" name="nomecliente" value="<?= $venda['nomecliente'] ?>" required>
        <label>Produto</label>
        <input type="text" name="produto" value="<?= $venda['produto'] ?>" required>
        <label>Preço total:</label>
        <input type="text" name="precototal" value="<?= $venda['precototal'] ?>" required>
       

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
