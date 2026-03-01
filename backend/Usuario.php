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

    // CADASTRAR USUÁRIO
    public function cadastrar($nome, $email, $senha)
    {
        $sql = $this->pdo->prepare(
            "INSERT INTO usuarios (nome, email, senha)
             VALUES (?, ?, ?)"
        );

        $sql->execute([
            $nome,
            $email,
            $senha
        ]);

        return true;
    }

    public function verificar($email, $senha)
    {
        $sql = $this->pdo->prepare(
            "SELECT * FROM usuarios WHERE email = :email"
        );

        $sql->bindValue(":email", $email);

        $sql->execute();

        if ($sql->rowCount() > 0) {

            $usuario = $sql->fetch(PDO::FETCH_ASSOC);

            if($senha === $usuario['senha']){

                return $usuario;

            }
        }

        return false;
    }
}
