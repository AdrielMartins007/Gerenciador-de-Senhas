<?php

session_start();

require_once '../backend/Usuario.php';

if(isset($_POST['entrarConta'])){

    $usuario = new Usuario;

    if($usuario->verificar(isset($_POST['email']), $_POST['senha'])){
        echo "<script>
        alert('VERIFICAÇÃO CONFIRMADA COM SUCESSO, BEM VINDO!');
        window.location.href = 'telaAcesso.php';
        </script>";
    } else {
        echo "<script>
        alert('ERRO! EMAIL OU SENHA INSERIDOS INCORRETAMENTE...');
        </script>";
        header("Location = index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>

        <img src="imagens/duendeMascote.png" alt="imagem do mascote do site">

        <h1>BEM VINDO!</h1>

        <form method="post">

            <div class="entrada">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="senha" required>
            </div>

            <div class="botao-esq-dir">
                <button type="submit" class="botaoDireito" name="entrarConta">
                    Entrar
                </button>

                <button type="submit" class="botaoEsquerdo" name="novoCadastro">
                    Fazer Cadastro
                </button>
            </div>

        </form>

        <footer>

            <p><a href="https://github.com/AdrielMartins007" target="black">© Adriel Martins - 2026</a></p>

        </footer>

    </main>

</body>

</html>