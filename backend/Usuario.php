<?php

require_once "../backend/Conexao.php";

class Usuario
{
    private $pdo;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->pdo = $conexao->conectar();
    }

    public function cadastrar($nome, $email, $senha)
    {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        $this->pdo->query($sql);

        return true;
    }

    public function verificar($email, $senha)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";

        $resultado = $this->pdo->query($sql);

        if ($resultado->rowCount() > 0) {


            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);

            if ($senha === $usuario['senha']) {
                return $usuario;
            }
        }

        return false;
    }
}
