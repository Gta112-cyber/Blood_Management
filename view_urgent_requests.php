<?php
$conn = new mysqli("localhost", "root", "", "blood_bank");
$result = $conn->query("SELECT * FROM urgent_requests ORDER BY date_requested DESC");

echo "<h2>Urgent Blood Requests</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<div>
        <p><strong>Patient:</strong> {$row['name']}</p>
        <p><strong>Blood Type:</strong> {$row['blood_type']}</p>
        <p><strong>Units Needed:</strong> {$row['units_needed']}</p>
        <p><strong>Contact:</strong> {$row['contact']}</p>
        <p><strong>Location:</strong> {$row['location']}</p>
        <hr>
    </div>";
}
$conn->close();
?>