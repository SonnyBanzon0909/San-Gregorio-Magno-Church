<?php
// Start the session
session_start();
require_once "../connect.php";
 
// Fetch data from the database
$sql = "SELECT name, gender, barangay, age, date_time FROM formdata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start creating the Word document
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment;Filename=document.doc");

    echo "<html>";
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
    echo "<body>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Gender</th><th>Barangay</th><th>Age</th><th>Date</th></tr>";

    // Output the data as rows in the table
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["barangay"]."</td><td>".$row["age"]."</td><td>".$row["date"]."</td></tr>";
    }

    echo "</table>";
    echo "</body>";
    echo "</html>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>




