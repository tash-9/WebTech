<?php

$conn = mysqli_connect("localhost", "root", '', '', 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); // Stop if connection fails
} else {
    echo "Connected <br>"; // Connection successful message
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS student_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>"; // Success message
} else {
    die("Error creating database: " . $conn->error); // Stop if error
}

// Select the database
mysqli_select_db($conn, 'student_db');

// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully<br>"; // Table created successfully
} else {
    echo "Error creating table: " . mysqli_error($conn); // Show error if table creation fails
}

?>