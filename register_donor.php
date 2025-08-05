<?php
$conn = new mysqli("localhost", "root", "", "blood_bank");

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$blood_type = $_POST['blood_type'];
$contact = $_POST['contact'];

$sql = "INSERT INTO donors (name, age, gender, blood_type, contact)
        VALUES ('$name', $age, '$gender', '$blood_type', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "Donor registered successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>