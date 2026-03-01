<?php

session_start(); /* chamando o array global novamente para dentro dessa pagina */

require_once '../backend/Usuario.php'; /* chamando tambem o codigo php com as funcoes */

if(isset($_POST['enviar'])){ /* ao receber o clique do botao enviar... */

    $usuario = new Usuario(); /* ele cria um novo usuario */

    if($usuario->enviarDados($_POST['nome'], $_POST['email'], $_POST['senha'])){ /* e os dados do novo usuario serão mandados para dentro do array */
        echo "<script>
        alert('CADASTRO REALIZADO COM SUCESSO');
        window.location.href = 'telaAcesso.php';
        </script>";
    } else {
        echo "<script>
        alert('ERRO!');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <main>
        <h1>FAÇA SEU CADASTRO!</h1>

        <form method="POST">

            <div class="entrada" id="entrada-cadastro">
                <input type="text" placeholder="nome" name="nome" required>

                <input type="email" placeholder="email" name="email" required>

                <input type="password" placeholder="senha" name="senha" required>
            </div>

            <div class="botao-esq-dir">
                <button type="submit" id="botao-cadastro" name="enviar">
                    Cadastrar
                </button>
            </div>

        </form>

    </main>

</body>

</html>