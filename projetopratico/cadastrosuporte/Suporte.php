<?php

class Suporte
{
    private $idChamado;
    private $nomeCliente;
    private $emailCliente;
    private $assunto;
    private $mensagem;

    public function __construct($nomeCliente, $emailCliente, $assunto, $mensagem)
    {
        $this->nomeCliente = $nomeCliente;
        $this->emailCliente = $emailCliente;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;
    }

    public function getId()
    {
        return $this->idChamado;
    }

    public function setId($idChamado)
    {
        $this->idChamado = $idChamado;
    }

    public function getnomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setnomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    public function getemailCliente()
    {
        return $this->emailCliente;
    }

    public function setemailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;
    }

    public function getassunto()
    {
        return $this->assunto;
    }

    public function setassunto($assunto)
    {
        $this->assunto = $assunto;
    }
    public function getmensagem()
    {
        return $this->mensagem;
    }

    public function setmensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }
}
