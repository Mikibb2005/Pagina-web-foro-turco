<?php
include('conexion.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $usuario_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO temas (titulo, contenido, usuario_id) VALUES ('$titulo', '$contenido', '$usuario_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: lista_temas.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- Formulario para crear un nuevo tema -->
<form method="post" action="nuevo_tema.php">
    Título: <input type="text" name="titulo"><br>
    Contenido: <textarea name="contenido"></textarea><br>
    <input type="submit" value="Crear Tema">
</form>
