<?php

class Dados /* classe para a recebimento e armazenamento de dados */
{
    public $conta; /* nome da conta */
    public $email; /* email da conta */
    public $senha; /* senha da conta */

    public static $armaz = []; /* array para armazenar os dados da conta */

    public function __construct()
    {
        $this->conta = ""; /* valores vazios que serão inseridos com a funcao de armazenar dados */
        $this->email = "";
        $this->senha = "";
    }

    public function armazDados($conta, $email, $senha) /* funcao de armazenar dados */
    {
        self::$armaz[] = [ 
            'conta' => $conta, /* incluindo os valores dentro do array, separados por nome individualmente */
            'email' => $email,
            'senha' => $senha
        ];

        echo "Dados armazenados com sucesso<br>";
    }

    public function mostrarDados(){
        foreach(self::$armaz as $dados){ /* mostrando os dados do array */
            echo "<br>";
            echo "Conta: " . $dados['conta'] . "<br>"; /* mostrando individualmente baseado pelo nome */
            echo "Email: " . $dados['email'] . "<br>";
            echo "Senha: " . $dados['senha'] . "<br>";
        }
    }
}

$a = new Dados();
$a->armazDados("mercado livre", "adriel123@gmail.com", "adriel123123"); /* inserindo os dados no armazenamento */
$a->armazDados("amazon", "adriel123@gmail.com", 123123);
$a->armazDados("amazon", "adriel123@gmail.com", 123123);
$a->armazDados("amazon", "adriel123@gmail.com", 123123);
$a->mostrarDados(); /* funcao mostrando os dados */
