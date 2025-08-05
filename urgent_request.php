<?php
$conn = new mysqli("localhost", "root", "", "blood_bank");

$name = $_POST['name'];
$blood_type = $_POST['blood_type'];
$units = $_POST['units'];
$contact = $_POST['contact'];
$location = $_POST['location'];

$sql = "INSERT INTO urgent_requests (name, blood_type, units_needed, contact, location)
        VALUES ('$name', '$blood_type', $units, '$contact', '$location')";

if ($conn->query($sql) === TRUE) {
    echo "Urgent request submitted. We will try to contact available donors.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>