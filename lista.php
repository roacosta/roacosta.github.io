<?php
include 'conexao.php';

$sql = "SELECT * FROM itens";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<ul>";
    while($linha = $resultado->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($linha["nome"]) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum item encontrado.";
}

$conn->close();
?>