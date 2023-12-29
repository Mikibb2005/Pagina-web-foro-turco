<?php
include('conexion.php');

$sql = "SELECT * FROM temas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<a href='ver_tema.php?id=".$row['id']."'>".$row['titulo']."</a><br>";
    }
} else {
    echo "No hay temas disponibles.";
}

$conn->close();
?>
