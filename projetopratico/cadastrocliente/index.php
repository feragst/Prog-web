<?php
require_once 'ControlaCliente.php';

$controlaCliente = new ControlaCliente();
$cliente = $controlaCliente->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <style>
        table { border-collapse: collapse; width: 70%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a.button {
            background-color: #007BFF;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            margin-right: 5px;
            border-radius: 3px;
        }
        a.button.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
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
                            <a class="button" href="edita.php?id=<?= $cliente['idcliente'] ?>">Editar</a>
                            <a class="button delete" href="excluir.php?id=<?= $cliente['idcliente'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php endif; ?>
</body>
</html>
