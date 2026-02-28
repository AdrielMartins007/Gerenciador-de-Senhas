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

        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }
    }

    public function enviarDados($nome, $email, $senha) /* funcao para o envio de dados */
    {
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }

        $_SESSION['usuarios'][] = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha
        ];

        return true;
    }

    public function verificar($email, $senha) /* funcao de verificação */ {
        if(!isset($_SESSION['usuarios'])){
            return false;
        }

        foreach($_SESSION['usuarios'] as $user){
            if($user['email'] == $email && $user['senha'] == $senha){
                return true;
            }
        }
        return false;
    }
    
}
