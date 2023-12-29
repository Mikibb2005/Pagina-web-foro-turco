<?php
include('conexion.php');

$tema_id = $_GET['id'];

$sql = "SELECT * FROM temas WHERE id = $tema_id";
$result = $conn->query($sql);
$tema = $result->fetch_assoc();

echo "<h2>".$tema['titulo']."</h2>";
echo "<p>".$tema['contenido']."</p>";

// Mostrar respuestas
$sql_respuestas = "SELECT * FROM respuestas WHERE tema_id = $tema_id";
$result_respuestas = $conn->query($sql_respuestas);

if ($result_respuestas->num_rows > 0) {
    echo "<h3>Respuestas</h3>";
    while ($row = $result_respuestas->fetch_assoc()) {
        echo "<p><strong>".$row['usuario']."</strong>: ".$row['contenido']."</p>";
    }
} else {
    echo "No hay respuestas aún.";
}

$conn->close();
?>
