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


    // VERIFICAR LOGIN
    public function verificar($email, $senha)
    {
        $sql = $this->pdo->prepare(
            "SELECT * FROM usuarios WHERE email = ? AND senha = ?"
        );

        $sql->execute([
            $email,
            $senha
        ]);

        if ($sql->rowCount() > 0) {

            $dados = $sql->fetch();

            return $dados['nome'];
        }

        return false;
    }
}