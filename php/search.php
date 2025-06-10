<?php
include 'db.php';
$source = $_POST['source'];
$destination = $_POST['destination'];
$date = $_POST['date'];

$sql = "SELECT * FROM trains WHERE source='$source' AND destination='$destination'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Train: " . $row['name'] . " | Departure: " . $row['departure'] . "<br>";
    }
} else {
    echo "No trains found.";
}
$conn->close();
?>
