<?php
$host = "localhost";
$user = "root";
$pass = "root"; // ou vazio
$db = "gerenciador_de_senhas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
