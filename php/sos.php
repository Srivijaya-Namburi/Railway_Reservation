<?php
include 'db.php';
$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO sos_reports (name, message) VALUES ('$name', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "SOS report sent!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
