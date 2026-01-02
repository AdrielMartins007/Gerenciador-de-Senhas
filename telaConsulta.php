<?php
session_start();
require "conexao.php";
require "crypto.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: telaLogin.php");
    exit;
}

$sql = "SELECT * FROM senhas WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_SESSION['usuario_id']);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Senhas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="caixaDados">

        <?php if ($result->num_rows > 0): ?>

            <img src="imagens/duendeAssobiando.png" alt="duende feliz">

            <?php while ($row = $result->fetch_assoc()): ?>

                <div>
                    <p class="site-senha"><strong>Conta:</strong> <?= htmlspecialchars($row['nome']) ?></p>
                    <p class="site-senha"><strong>Login:</strong> <?= htmlspecialchars($row['login_usuario']) ?></p>

                    <p class="site-senha"><strong>Senha:</strong></p>
                    <input type="password" id="senha<?= $row['id'] ?>"
                        value="<?= htmlspecialchars(descriptografar($row['senha'])) ?>" readonly>

                    <div class="btnEsquerdoDireito">
                        <button type="button" onclick="toggleSenha(<?= $row['id'] ?>)">
                            Visualizar
                        </button>

                        <button type="button" onclick="if (confirm('Deseja excluir esta senha?')) {
                            window.location.href='excluirSenha.php?id=<?= $row['id'] ?>';
                        }">
                            Excluir
                        </button>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php else: ?>

            <img src="imagens/duendeTriste.png" alt="duende triste">

            <div class="semSenha">
                <p id="textoSemSenha">Ops, Você ainda não cadastrou nenhuma senha...</p><br><br>

                <div ><button onclick="window.location.href='telaIncluir.php'" class="btnCentro">
                        Cadastrar senha
                    </button>
                </div>
            </div>

        <?php endif; ?>

        <button onclick="window.location.href='telaAcesso.php'" class="btnCentro" style="margin: auto; background-color: rgb(88, 121, 80)">
            Voltar
        </button>

    </div>


    <script>
        function toggleSenha(id) {
            const campo = document.getElementById("senha" + id);
            campo.type = campo.type === "password" ? "text" : "password";
        }
    </script>

</body>

</html>