<?php
require_once '../controllers/ControlaSuporte.php';

$controlaSuporte = new ControlaSuporte();
$suporte = $controlaSuporte->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Chamados</title>
    <link rel="stylesheet" href="../styles.css">

    
</head>
<body>
    <a href="../index.php" class="home-button">🏠</a>
    <h2>Chamados cadastrados</h2>

    <?php if (count($suporte) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suporte as $suporte): ?>
                    <tr>
                        <td><?= $suporte['idchamado'] ?></td>
                        <td><?= $suporte['nomecliente'] ?></td>
                        <td><?= $suporte['emailcliente'] ?></td>
                        <td><?= $suporte['assunto'] ?></td>
                        <td><?= $suporte['mensagem'] ?></td>
                        <td>
                            <a class="button" href="editaSuporte.php?id=<?= $suporte['idchamado'] ?>">Editar</a>
                            <a class="button delete" href="../services/excluirSuporte.php?id=<?= $suporte['idchamado'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

                <a href="cadastraSuporte.html" class="button">Cadastrar Novo Chamado</a>
    <?php else: ?>
        <p>Nenhum chamado cadastrado.</p>
    <?php endif; ?>
</body>
</html>
