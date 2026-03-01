<?php

session_start();

require_once '../backend/Dados.php';

$dados = new Dados();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Senhas</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .mostrar-conta {
        background-color: lightgreen;
        width: 90%;
        box-sizing: border-box;
        border-radius: 20px;
        padding: 10px;
        overflow: auto;
    }

    .bota-esq-dir {
        margin: 0px;
        padding: 0px;
    }
</style>

<body>

    <main>

        <img src="imagens/duendeAssobiando.png" alt="duende feliz">

        <div class="mostrar-conta">
            <?php

            $conta = $dados->mostrarDados();

            foreach ($conta as $valor) {
                echo "Conta: " . $valor['conta'] . "<br>";
                echo "Email: " . $valor['emailConta'] . "<br>";
                echo "Senha: " . $valor['senhaConta'] . "<br>";
                echo "<br>";
            }

            ?>
        </div>

        <form method="post">
            <div class="botao-esq-dir">
                <button name="voltar">Voltar</button>
            </div>

            <?php

            if (isset($_POST['voltar'])) {
                header("Location: telaAcesso.php");
            }

            ?>
        </form>

    </main>

</body>

</html>