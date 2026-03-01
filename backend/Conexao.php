<?php

class Conexao
{
    private $host = "localhost";
    private $banco = "gerenciador";
    private $usuario = "root";
    private $senha = "password";

    public function conectar()
    {
        $pdo = new PDO(
            "mysql:host=$this->host;dbname=$this->banco",
            $this->usuario,
            $this->senha
        );

        return $pdo;
    }
}