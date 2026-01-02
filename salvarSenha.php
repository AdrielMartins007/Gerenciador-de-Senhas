<?php
session_start();
require "conexao.php";
require "crypto.php";

if (!isset($_SESSION["usuario_id"])) {
    header("Location: telaLogin.php");
    exit;
}

$nome = $_POST['nome'];
$login_usuario = $_POST['login_usuario'];
$senha = criptografar($_POST['senha']);
$usuario_id = $_SESSION['usuario_id'];

$sql = "INSERT INTO senhas (nome, login_usuario, senha, usuario_id)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nome, $login_usuario, $senha, $usuario_id);
$stmt->execute();

header("Location: telaConsulta.php");
exit;
