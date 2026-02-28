<?php

class Dados /* classe para a recebimento e armazenamento de dados */
{
    public $conta; /* nome da conta */
    public $email; /* email da conta */
    public $senha; /* senha da conta */

    public function __construct()
    {
        $this->conta = ""; /* valores vazios que serão inseridos com a funcao de armazenar dados */
        $this->email = "";
        $this->senha = "";

        if(!isset($_SESSION['dados'])){
            $_SESSION['dados'];
        }
    }

    public function armazDados($conta, $email, $senha) /* funcao de armazenar dados */
    {
        if(!isset($_SESSION['dados'])){
            $_SESSION['dados'];
        }

        $_SESSION['dados'][] = [
            'conta' => $conta,
            'email' => $email,
            'senha' => $senha
        ];

        return true;
    }

    public function mostrarDados(){
        if(!isset($_SESSION['dados'])){
            return false;
        }

        foreach($_SESSION['dados'] as $dado){
            echo "Conta: " . $dado['conta'];
            echo "Email: " . $dado['email'];
            echo "Senha: " . $dado['senha'];
        }

        return false;
    }
}