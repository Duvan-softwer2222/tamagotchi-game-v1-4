<?php
// Establecer conexión a la base de datos
$host = "localhost"; // Cambia si tu servidor es diferente
$user = "root"; // Usuario por defecto de XAMPP/MAMP
$password = ""; // Contraseña por defecto de XAMPP/MAMP
$dbname = "tamagotchi_db"; // El nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
