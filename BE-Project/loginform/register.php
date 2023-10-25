<?php
$servername = "localhost"; // Server name
$username = "root";        // MySQL username
$password = "";            // MySQL password
$database = "test1";       // Replace with your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data to insert
$name = "John Doe";
$email = "johndoe@example.com";
$pass = "1234";
$rpass = "1234"; // Fix: Use $rpass, not 'rpass'

// SQL query to insert data into the table
$sql = "INSERT INTO stud (name, email, pass, rpass) VALUES ('$name', '$email', '$pass', '$rpass')"; // Fix: Use $pass and $rpass variables

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
