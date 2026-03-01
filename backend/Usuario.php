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

        if (!isset($_SESSION['usuario'])) { /* Verificação se há a criação do array global session, caso nao, ele cria o array para armazenar os dados de acesso de cada usuario */
            $_SESSION['usuario'] = []; /* criacaçõ do array global para armazenar os dados dos usuarios */
        }
    }

    public function enviarDados($nome, $email, $senha) /* funcao para o envio de dados  para dentro do array global*/
    {
        if (!isset($_SESSION['usuario'])) { /* Mesma funcao de verificação, se caso nao tiver ele cria o array global para armazenar os dados dos usuarios */
            $_SESSION['usuario'] = [];
        }

        $_SESSION['usuario'][] = [ /* incluindo os dados dos usuarios dentro do array global, pegando os valores que ele inserir dentro dos parentes da função... */
            'nome' => $nome, /* atribuindo 'nomes' a cada tipo de variavel */
            'email' => $email,
            'senha' => $senha
        ];

        return true; /* caso os dados sejam enviados corretamente, ele retorna o valor verdadeiro, isso serve para enviarmos uma mensagem na tela de confirmação de envio dos dados para dentro do array global */
    }

    public function verificar($email, $senha) /* funcao de verificação para o acesso dentro do app*/
    {
        foreach ($_SESSION['usuario'] as $user) { /* chamando o array e criando uma variavel que vai percorrer os valores selecionados e verificando com os dados enviados dentro dos parentes */
            if ($user['email'] == $email && $user['senha'] == $senha) { /* selecionando e dando uma condição */
                return true; /* caso a condição esteja certa, retorna verdadeiro */
            }
        }

        return false; /* caso esteja errada, retorna falo */

        /* o retorno serve principalmente para verificação se o envio ou a verificação dos dados estao corretos em forma de boolean(true e false) */
    }
}
