<?php

require_once "Conexao.php"; /* chamando o codigo e a funcao do arquivo de conexao com o banco de dados */

class Dados /* Criação da classe de dados */
{

    private $pdo; /* Criação da variavel que vai aguardar a conexao */

    public function __construct()
    {
        $conexao = new Conexao(); /* criando um novo objeto de conexao */
        $this->pdo = $conexao->conectar(); /* variavel de conexao que vai se conectar com o banco de dados quando for chamado */
    }

    public function enviarDados($conta, $email, $senha) /* Criacao da funcao enviar dados que vai receber 3 valores */
    {

        $usuario_id = $_SESSION['id']; /* Variavel que pega o valor do id usuario quando ele ta logado */

        /* Criacao da variavel com o comando sql para o envio dos dados para o banco de dados */
        $sql = "INSERT INTO contas (usuario_id, conta, emailConta, senhaConta) VALUES ('$usuario_id', '$conta', '$email', '$senha')";

        return $this->pdo->query($sql); /* retornando a execução do codigo e o query para a execusao do codigo dentro do $sql, que no caso vai ser mandado para o banco de dados */
    }

    public function mostrarDados()
    {

        $usuario_id = $_SESSION['id']; /* pegando o id do usuario e inserindo dentro da variavel $usuario_id */

        $sql = "SELECT * FROM contas WHERE usuario_id = '$usuario_id'"; /* variavel com o comando sql que será executado dentro do banco de dados */

        $resultado = $this->pdo->query($sql); /* colocando o envio dos dados dentro da variavel $resultado */

        return $resultado->fetchAll(PDO::FETCH_ASSOC);
        /* pedindo o retorno da variavel $resultado com todos os valores dentro do banco de dados. fetchALL pega todos os valores dentro do banco de dados.
        
        PDO::FETCH_ASSOC - Significa que vc está pedindo que o retorno seja em forma associativa, no caso, conta, email e senha será retornado o valor de cada um{
            ex:

                "conta" => "Netflix",
                "emailConta" => "[email protected]",
                "senhaConta" => "123"
        }

        */
    }
}
