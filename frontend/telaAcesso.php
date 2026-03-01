<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bem Vindo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>

        <img id="dundebemVindo" src="imagens/mascotePerguntando.png" alt="mascote fazendo uma pergunta">

        <div id="pergunta-acesso">
            <h2>Bem vindo <?php echo $_SESSION['nome']; ?>, o que deseja realizar?</h2>
        </div>

        <div class="botao-esq-dir">

            <button>Consultar</button>

            <button>Incluir senha</button>

        </div>

    </main>

</body>

</html>