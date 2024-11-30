<?php
include('db.php');

// Obtener los datos de la tabla
$sql = "SELECT * FROM tamagotchi_data ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si hay datos, devolver el último registro
    $row = $result->fetch_assoc();
    echo json_encode($row); // Convertir el resultado a formato JSON
} else {
    echo json_encode(["error" => "No se encontraron datos"]);
}

$conn->close();
?>
