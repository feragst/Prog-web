<?php

include 'Database.php';

class ControlaCliente
{
    private $tabela = 'clientes';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function salvar(Cliente $cliente)
    {
        try {
            $sql = "INSERT INTO $this->tabela (nome, email, idade, genero) VALUES (?, ?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$cliente->getNome(), $cliente->getEmail(), $cliente->getIdade(), $cliente->getGenero()]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao inserir usuário: " . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM $this->tabela";
            $stmt = $this->connection->query($sql);
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $clientes;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao listar usuários: " . $e->getMessage());
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao excluir usuário: " . $e->getMessage());
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabela WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $cliente;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao buscar usuário: " . $e->getMessage());
        }
    }

    public function atualizar(Cliente $cliente)
    {
        try {
            $sql = "UPDATE $this->tabela SET nome = ?, email = ?, idade = ?, genero = ? WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                $cliente->getNome(),
                $cliente->getEmail(),
                $cliente->getIdade(),
                $cliente->getGenero(),
                $cliente->getId()
            ]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar usuário: " . $e->getMessage());
        }
    }
}
