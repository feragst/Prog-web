<?php
require_once '../controllers/ControlaVenda.php';

$controlaVenda = new ControlaVenda();
$venda = $controlaVenda->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Vendas</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <a href="../index.php" class="home-button">🏠</a>
    <h2>Vendas cadastrados</h2>

    <?php if (count($venda) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do venda:</th>
                    <th>Preço total:</th>
                    <th>Produto:</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($venda as $venda): ?>
                    <tr>
                        <td><?= $venda['idvenda'] ?></td>
                        <td><?= $venda['nomecliente'] ?></td>
                        <td><?= $venda['precototal'] ?></td>
                        <td><?= $venda['produto'] ?></td>
                       
                        <td>
                            <a class="button" href="editaVendas.php?id=<?= $venda['idvenda'] ?>">Editar</a>
                            <a class="button delete" href="../services/excluirVendas.php?id=<?= $venda['idvenda'] ?>">Excluir</a>
                        </td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
</table>
        <a href="cadastraVendas.html" class="button">Cadastrar Nova Venda</a>

    <?php else: ?>
        <p>Nenhuma venda cadastrado.</p>
    <?php endif; ?>
</body>
</html>
