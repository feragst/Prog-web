<?php
require_once '../controllers/ControlaCliente.php';

$controlaCliente = new ControlaCliente();
$cliente = $controlaCliente->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../styles.css">

    
</head>
<body>
    <a href="../index.php" class="home-button">🏠</a>
    <h2>Cliente cadastrados</h2>

    <?php if (count($cliente) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Genero</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cliente as $cliente): ?>
                    <tr>
                        <td><?= $cliente['idcliente'] ?></td>
                        <td><?= $cliente['nome'] ?></td>
                        <td><?= $cliente['email'] ?></td>
                        <td><?= $cliente['idade'] ?></td>
                        <td><?= $cliente['genero'] ?></td>
                        <td>
                            <a class="button" href="editaCliente.php?id=<?= $cliente['idcliente'] ?>">Editar</a>
                            <a class="button delete" href="../services/excluirCliente.php?id=<?= $cliente['idcliente'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

                <a href="cadastraCliente.html" class="button">Cadastrar Novo cliente</a>
    <?php else: ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php endif; ?>
</body>
</html>
