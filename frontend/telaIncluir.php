<?php 

session_start();

require_once '../backend/Dados.php';

if(isset($_POST['incluir'])){

    $usuario = new Dados();

    $usuario->enviarDados(
        $_POST['conta'], 
        $_POST['email'], 
        $_POST['senha']
    );

    echo 
    "<script>
    alert('Dados enviados com sucesso!');
    </script>";

}

if(isset($_POST['voltar'])){
    header("Location: telaAcesso.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir Senha</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .titulo {
        font-size: 35px;
    }

    #incluir-senha {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }

    #img{
        text-align: center;
    }
</style>

<body>

    <main>

        <form method="post">

            <div id="img"><img src="imagens/duenteTampandoOlhos.png" alt="mascote tampando os olhos"></div>

            <h1 class="titulo">INCLUIR NOVA SENHA</h1>

            <div id="incluir-senha">
                <input type="text" name="conta" placeholder="Conta ou Site" required>
                <input type="text" name="email" placeholder="Email da conta" required>
                <input type="password" name="senha" placeholder="Senha" required>
            </div>

            <div class="botao-esq-dir">
                <button name="incluir">Incluir</button>
                <button name="voltar" formnovalidate>Voltar</button>
            </div>

        </form>

    </main>

</body>

</html>