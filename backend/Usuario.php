<?php

class Usuario
{
    public $nome; /* nome do usuario */
    public $email; /* email do usuario */
    public $senha; /* senha do usuario */

    public function __construct() /* recebimento dos dados dos novos usuarios */
    {
        $this->nome = ""; /* incluindo os valores dentro das variaveis */
        $this->email = "";
        $this->senha = "";

        if (!isset($_SESSION['usuario'])) {
            $_SESSION['usuario'] = [];
        }
    }

    public function enviarDados($nome, $email, $senha) /* funcao para o envio de dados */
    {
        if (!isset($_SESSION['usuario'])) {
            $_SESSION['usuario'] = [];
        }

        $_SESSION['usuario'][] = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha
        ];

        return true;
    }

    public function verificar($email, $senha) /* funcao de verificação */
    {
        foreach ($_SESSION['usuario'] as $user) {
            if ($user['email'] == $email && $user['senha'] == $senha) {
                return true;
            }
        }

        return false;
    }
}
