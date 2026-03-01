<?php

class Usuario
{
    public $nome;
    public $email;
    public $senha;

    public function __construct() {}

    public function enviarDados($nome, $email, $senha) {}

    public function verificar($email, $senha) {}
}
