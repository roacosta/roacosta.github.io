<?php
$servidor = "localhost";
$usuario = "rodr3535_admin";
$senha = "uHeShRupv5hf20J0V0fv";
$banco = "rodr3535_database";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica se houve erro
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>