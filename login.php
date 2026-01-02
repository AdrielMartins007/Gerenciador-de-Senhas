<?php
session_start();
require "conexao.php";

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($senha, $user['senha'])) {

        // LOGIN OK
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];

        header("Location: telaAcesso.php"); // ✅ VAI PARA A TELA CERTA
        exit;
    }
}

// LOGIN FALHOU
header("Location: telaLogin.php?erro=login");
exit;
