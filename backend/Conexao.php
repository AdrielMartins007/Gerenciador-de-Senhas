<?php

class Conexao
{
    private $host = "localhost"; /* Variavel de endereço aonde o banco de dados está localizado */
    private $banco = "gerenciador"; /* Variavel que vai receber o nome do banco de dados */
    private $usuario = "root"; /* Nome de usuario do banco de dados */
    private $senha = "password"; /* Senha de criação do banco de dados */

    public function conectar() /* Criação da funcao para conectar ao banco de dados */
    {
        $pdo = new PDO( /* Criando a variavel para se conectar ao banco de dados e o novo objeto*/
            "mysql:host=$this->host;dbname=$this->banco", /* comando que informa qual o tipo de banco de dados vai se conectar e o recebimento dos valores para a conexao */
            $this->usuario,
            $this->senha
        );

        return $pdo; /* retorna a conexão com o banco de dados */
    }
}

/* 

PONTOS IMPORTANTES:

$pdo = new PDO() : É o objeto que faz ligação com o banco de dados, ou seja, ele é padrao...nao pode ser alterado, até pq ele é a ferramenta oficial do php para conversar com o banco de dados.

mysql, host, dbname: Da mesma forma que o PDO, esse primeiro comando é padrao, ou seja, vc vai informar o tipo de banco de dados e os valores do banco de dados que vc vai mandar pra ele. O host é o lugar aonde o servidor está. O dbname é o nome do banco de dados.

*/