<?php
include 'db.php';
$name = $_POST['name'];
$trainId = $_POST['trainId'];
$seat = $_POST['seat'];

$sql = "INSERT INTO bookings (name, train_id, seat) VALUES ('$name', '$trainId', '$seat')";
if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
