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

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = $this->pdo->prepare(

        "INSERT INTO usuarios (nome, email, senha)
         VALUES (?, ?, ?)"

    );

    return $sql->execute([

        $nome,
        $email,
        $senhaHash

    ]);
}

    public function verificar($email, $senha)
    {

        $sql = $this->pdo->prepare(

            "SELECT * FROM usuarios WHERE email = ?"

        );

        $sql->execute([$email]);

        if ($sql->rowCount() > 0) {

            $dados = $sql->fetch();

            if (password_verify($senha, $dados['senha'])) {

                return $dados['nome'];
            }
        }

        return false;
    }
}
