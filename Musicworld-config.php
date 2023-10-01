<?php
// Replace these variables with your database credentials
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "music_world_db";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all table names in the database
$sql = "SELECT *FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tables in the database:<br>";
    while($row = $result->fetch_assoc()) {
        // Output the table names with links (assuming you want links)
        echo $row["username"] . '<br>';
    }
} else {
    echo "No tables found in the database.";
}

// Close the database connection
$conn->close();
?>