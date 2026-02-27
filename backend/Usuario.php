<?php

class Usuario
{
    public $nome; /* nome do usuario */
    public $email; /* email do usuario */
    public $senha; /* senha do usuario */

    public static $lista = []; /* array para a inclusao dos dados e a verificação */

    public function __construct($nome, $email, $senha) /* recebimento dos dados dos novos usuarios */
    {
        $this->nome = $nome; /* incluindo os valores dentro das variaveis */
        $this->email = $email;
        $this->senha = $senha;
    }

    public function verificar() /* funcao de verificação */
    {
        foreach (self::$lista as $conta) { /* chamando o array e gerando uma variavel que vai percorrer por dentro dela  */
            if ($conta->email == $this->email && $conta->senha == $this->senha) {  /* fazendo a vericação das variaveis que estao dentro do array com os dados do usuario */
                return true; /* retorno true para podermos pegar o resultado da verificaçao em outra funcao */
            }
        }
        return false; /* retorno false no final da funcao para nao fechar sempre com o false o loop */
    }

    public function enviarDados() /* funcao para o envio de dados */
    {

        self::$lista[] = $this; /* nesse caso, o '$this' é o envio dos dados que foram inseridos na criação do novo usuario, la no construct */

        echo "Dados enviados com sucesso...<br>"; /* confirmação na tela de envio */
    }

    public function acesso() /* funcao confirmando se pode ou nao entrar no app */
    {
        if ($this->verificar()) { /* é aqui que pegamos o resultado em boolean da funcao verificar */
            echo "Acesso liberado<br>"; /* mensagem de liberação */
        } else {
            echo "Acesso negado<br>";
        }
    }
}

$a = new Usuario("Adriel", "adriel123@gmail.com", 123123); /* exemplo de inclusao dos dados no novo usuario... */
$a->verificar(); /* aqui nao precisamos mais enviar dados, pq o '$this' ja envia automaticamente para o verificar */
$a->acesso();
$a->enviarDados();
$a->verificar();
$a->acesso();

$b = new Usuario("Adriel", "adriel123@gmail.com", 123123);
$b->verificar();
$b->acesso();
