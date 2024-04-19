<?php
// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = "123";
$dbname = "customer";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$age = $_POST['age'];

// SQL to insert data into the database
$sql = "INSERT INTO customers (name, age) VALUES ('$name', '$age')";

// Check if the data was successfully inserted
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
