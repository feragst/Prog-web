<?php
include 'ControlaSuporte.php';

if (!isset($_GET['id'])) {
    die('ID do chamado não informado.');
}

$controlaSuporte = new ControlaSuporte();
$suporte = $controlaSuporte->buscarPorId($_GET['id']);

if (!$suporte) {
    die('Chamado não encontrado.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Chamado</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Editar Chamado</h2>
    <form action="processaEdicao.php" method="post">
        <input type="hidden" name="idchamado" value="<?= $suporte['idchamado'] ?>">
        <label>Nome completo:</label>
        <input type="text" name="nomecliente" value="<?= $suporte['nomecliente'] ?>" required>
        <label>Email:</label>
        <input type="email" name="emailcliente" value="<?= $suporte['emailcliente'] ?>" required>
        <label>Assunto:</label>
        <input type="text" name="assunto" value="<?= $suporte['assunto'] ?>" required>
        <label>Mensagem:</label>
        <input type="text" name="mensagem" value="<?= $suporte['mensagem'] ?>" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
