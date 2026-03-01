<?php

require_once "Conexao.php";

class Dados
{

    private $pdo;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->pdo = $conexao->conectar();
    }

    public function enviarDados($usuario_id, $conta, $email, $senha)
    {
        $sql = $this->pdo->prepare(
            "INSERT INTO contas (usuario_id, conta, emailConta, senhaConta)
             VALUES (:usuario_id, :conta, :email, :senha)"
        );

        $sql->bindValue(":usuario_id", $usuario_id);
        $sql->bindValue(":conta", $conta);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);

        return $sql->execute();
    }

    public function mostrarDados($usuario_id)
    {
        $sql = $this->pdo->prepare(
            "SELECT * FROM contas WHERE usuario_id = :usuario_id"
        );

        $sql->bindValue(":usuario_id", $usuario_id);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
