<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php if (isset($_GET['erro']) && $_GET['erro'] == 'login'): ?>
        <script>
            alert("Usuario ou senha não cadastrados! clique em 'Fazer cadastro!'");
        </script>
    <?php endif; ?>

    <div class="caixaDados">

        <img src="imagens/duendeMascote.png" alt="imagem do mascote do site">

        <h1>BEM VINDO!</h1>

        <form action="login.php" method="POST">

            <input type="email" name="email" placeholder="insira seu email" ; required>

            <input type="password" name="senha" placeholder="senha">

            <div class="btnEsquerdoDireito">
                <button type="submit" class="botaoDireito">
                    Entrar
                </button>

                <button type="button" onclick="window.location.href='telaCadastro.php'" class="botaoEsquerdo">
                    Fazer Cadastro
                </button>
            </div>

            <p style="margin: 0 auto; text-align: center;">© 2025 Gerenciador de Senhas.
                Todos os direitos reservados.
            </p>

        </form>
    </div>

</body>

</html>