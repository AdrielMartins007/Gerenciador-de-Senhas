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

        <form>

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