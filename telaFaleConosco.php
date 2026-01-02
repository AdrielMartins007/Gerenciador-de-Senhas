<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fale Conosco</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="caixaDados">
        <h1>
            QUEM SOMOS NÓS?
        </h1>

        <div class="txtJustificado">
            <p style="font-size: 15px;">Esse app foi desenvolvido por Adriel Martins. Cujo objetivo foi ajudar e
                facilitar os usuarios a organizarem as
                senhas do cotidiano de forma segura e totalmente respaldada nas leis de proteção de dados(LGPD).</p><br>

            <p style="font-size: 15px; text-align: center;">Dúvidas ou problemas com o app: <a
                    href="https://wa.me/5591992536958" target="_blank">Meu whatsapp.</a></p><br>

            <p style="font-size: 15px; text-align: center;">Meus links:</p>

            <div class="links">
                <a href="https://www.instagram.com/adrielcmartins_/" style="margin: 15px;">Instagram</a>
                <a href="https://www.linkedin.com/in/adriel-martins-a3223b248/" style="margin: 15px;">LinkedIn</a>
                <a href="https://github.com/AdrielMartins007" style="margin: 15px;">GitHub</a>
            </div>
        </div>

        <div>
            <img src="imagens/duendeAtendente.png" alt="duende com headphone">
        </div>

        <button class="btnCentro" onclick="window.location.href='telaAcesso.php'" style="background-color: rgb(88, 121, 80)">
            voltar
        </button>

    </div>

</body>

</html>