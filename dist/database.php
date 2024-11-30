<?php
$servername = "localhost"; // Cambia esto si usas otro servidor
$username = "root";        // Usuario de la base de datos
$password = "";            // Contraseña del usuario
$dbname = "tamagotchi_game"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
