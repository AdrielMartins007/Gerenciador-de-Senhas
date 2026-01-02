<?php
session_start();
require "conexao.php";

// proteção: só logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: telaLogin.php");
    exit;
}

if (!isset($_GET['id'])) {
    header("Location: telaConsulta.php");
    exit;
}

$id = $_GET['id'];
$usuario_id = $_SESSION['usuario_id'];

// exclui somente se a senha for do usuário logado
$sql = "DELETE FROM senhas WHERE id = ? AND usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $id, $usuario_id);
$stmt->execute();

header("Location: telaConsulta.php");
exit;
