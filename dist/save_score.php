<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $score = intval($_POST['score']);
    $duration = intval($_POST['duration']);

    $stmt = $conn->prepare("INSERT INTO scores (name, score, duration) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $name, $score, $duration);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Score saved successfully!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
?>
