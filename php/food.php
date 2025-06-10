<?php
include 'db.php';
$train = $_POST['train'];
$food = $_POST['food'];

$sql = "INSERT INTO food_orders (train, food) VALUES ('$train', '$food')";
if ($conn->query($sql) === TRUE) {
    echo "Food order placed!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
