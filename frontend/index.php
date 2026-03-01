<?php

session_start(); /* chamando o array global para dentro do site, ou seja, ele vai chamar e trazer todos os valores que estao dentro do array global($_sesssion) */

require_once '../backend/Usuario.php'; /* Chamando o codigo de outra pagina para dentro do nosso site, sem precisar replicar ele novamente */

if(isset($_POST['entrarConta'])){ /* verificando o clique de um botao, ou seja, 'se o botao for clicado...' */

    $usuario = new Usuario(); /* caso ele seja clicado, ele vai criar um novo objeto */

    if($usuario->verificar($_POST['email'], $_POST['senha'])){ /* e esse objeto vai receber os valores que o usuario informar dentro do input 'email' e 'senha', ao mesmo tempo, ele vai chamar a funcao verificar... */
        echo "
        <script>
        alert('Dados confirmados, bem vindo!');
        window.location.href = 'telaAcesso.php';
        </script>"; /* aqui é uma funcao javascript para exibir uma mensagem na tela se o retorno for verdadeiro */
    } else {
        echo "
        <script>
        alert('Dados nao confirmados, necessário fazer cadastro...');
        window.location.href = 'telaCadastro.php';
        </script>";
    }
}

if(isset($_POST['novoCadastro'])){ /* outro codigo simples, se caso o botao fazer cadastro for clicado, ele vai para uma tela receber os valores do novo usario, que será mandando para dentro do array e assim ele poder fazer acesso de outro lugar com email e senha... */
    header("Location: telaCadastro.php");
    exit();
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