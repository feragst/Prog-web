<?php

include '../others/Database.php';

class ControlaVenda
{
    private $tabela = 'vendas';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function salvar(Vendas $venda)
    {
        try {
            $sql = "INSERT INTO $this->tabela (nomecliente, precototal, produto) VALUES (?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$venda->getNome(), $venda->getPrecoTotal(), $venda->getProduto()]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao inserir venda: " . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM $this->tabela";
            $stmt = $this->connection->query($sql);
            $vendas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $vendas;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao listar vendas: " . $e->getMessage());
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM $this->tabela WHERE idvenda = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao excluir venda: " . $e->getMessage());
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabela WHERE idvenda = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $venda = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $venda;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao buscar venda: " . $e->getMessage());
        }
    }

    public function atualizar(Vendas $venda)
    {
        try {
            $sql = "UPDATE $this->tabela SET nomecliente = ?, precototal = ?, produto = ? WHERE idvenda = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                $venda->getNome(),
                $venda->getPrecototal(),
                $venda->getProduto(),
                $venda->getId()
            ]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar usuário: " . $e->getMessage());
        }
    }
}
