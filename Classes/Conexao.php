<?php

class Conexao {
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'cultura_q';

    public function conectar() {
        $conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        if ($conexao->connect_error) {
            die("Conexão falhou: " . $conexao->connect_error);
        }
        return $conexao;
    }
}
