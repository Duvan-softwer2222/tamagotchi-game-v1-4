<?php
include('db.php'); // Incluir la conexión a la base de datos

// Recibir datos del formulario o la solicitud AJAX
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre']; // Nombre del Tamagotchi
    $comida = $_POST['comida']; // Nivel de comida
    $felicidad = $_POST['felicidad']; // Nivel de felicidad
    $energia = $_POST['energia']; // Nivel de energía

    // Insertar los datos en la tabla
    $sql = "INSERT INTO tamagotchi_data (nombre, comida, felicidad, energia)
            VALUES ('$nombre', '$comida', '$felicidad', '$energia')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
