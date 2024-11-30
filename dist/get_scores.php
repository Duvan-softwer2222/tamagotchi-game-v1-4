<?php
include 'database.php';

$sql = "SELECT name, score, duration, created_at FROM scores ORDER BY score DESC LIMIT 10";
$result = $conn->query($sql);

$scores = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $scores[] = $row;
    }
}

echo json_encode($scores);

$conn->close();
?>
