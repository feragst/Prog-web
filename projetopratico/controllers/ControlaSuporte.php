<?php

include '../others/Database.php';

class ControlaSuporte
{
    private $tabela = 'suporte';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function salvar(Suporte $suporte)
    {
        try {
            $sql = "INSERT INTO $this->tabela (nomecliente, emailcliente, assunto, mensagem) VALUES (?, ?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$suporte->getnomeCliente(), $suporte->getemailCliente(), $suporte->getAssunto(), $suporte->getMensagem()]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao inserir chamado: " . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM $this->tabela";
            $stmt = $this->connection->query($sql);
            $suportes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $suportes;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao listar chamados: " . $e->getMessage());
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM $this->tabela WHERE idchamado = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao excluir chamado: " . $e->getMessage());
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabela WHERE idchamado = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $cliente;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao buscar usuário: " . $e->getMessage());
        }
    }

    public function atualizar(Suporte $suporte)
    {
        try {
            $sql = "UPDATE $this->tabela SET nomecliente = ?, emailcliente = ?, assunto = ?, mensagem = ? WHERE idchamado = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                $suporte->getnomeCliente(),
                $suporte->getemailCliente(),
                $suporte->getAssunto(),
                $suporte->getMensagem(),
                $suporte->getId()
            ]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar chamado: " . $e->getMessage());
        }
    }
}
