<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: telaLogin.php");
    exit;
}

$nomeUsuario = $_SESSION["nome"];
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

    <div class="caixaDados">

        <div class="perguntaAcesso">
            Olá <?= htmlspecialchars($nomeUsuario) ?>!<br>
            O que deseja realizar?
        </div>

        <img id="dundebemVindo" src="imagens/mascotePerguntando.png" alt="mascote fazendo uma pergunta">

        <div class="btnConsultarIncluir">
            <button type="button" onclick="window.location.href='telaConsulta.php'">
                Consultar
            </button>
            <button type="button" onclick="window.location.href='telaIncluir.php'">
                Incluir senha
            </button>
        </div>

        <div class="caixinhaInfo">
            <p class="textoSaibaMais">A senha de acesso é protegida com <strong>bcrypt</strong> e
                as senhas cadastradas são armazenadas com criptografia.
                <a href="telaInformacao.php">Entenda como funciona</a>.

            <div style="margin: 10px;">
                <p class="textoSaibaMais">duvidas? <a href="telaFaleConosco.php">fale conosco.</a></p>
            </div>
        </div>

    </div>

</body>

</html>