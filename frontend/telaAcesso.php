<?php 

session_start();

if(isset($_POST['consultar'])){
    header("Location: telaConsulta.php");
} else if (isset($_POST['incluir-senha'])){
    header("Location: telaIncluir.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bem Vindo</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    form #img-tela-acesso{
        text-align: center;
    }
</style>

<body>

    <main>

        <form method="post" id="telaAcesso">

            <div id="img-tela-acesso">
                <img id="dundebemVindo" src="imagens/mascotePerguntando.png" alt="mascote fazendo uma pergunta">
            </div>

            <div id="pergunta-acesso">
                <h2>Bem vindo <?php echo $_SESSION['nome']; ?>, o que deseja realizar?</h2>
            </div>

            <div class="botao-esq-dir">
                <button name="consultar">Consultar</button>
                <button name="incluir-senha">Incluir senha</button>
            </div>

        </form>

    </main>

</body>

</html>