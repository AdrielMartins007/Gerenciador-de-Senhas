<?php

class Conexao
{
    private $conexao = "localhost";
    private $banco = "gerenciador";
    private $usuario = "root";
    private $senha = "password";

    public function conectar()
    {
        try {

            $pdo = new PDO(
                "mysql:host=" . $this->conexao . ";dbname=" . $this->banco,
                $this->usuario,
                $this->senha
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
            
        } catch (PDOException $e) {

            echo "Erro: " . $e->getMessage();
        }
    }
}
