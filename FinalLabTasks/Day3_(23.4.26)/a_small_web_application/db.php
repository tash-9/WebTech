<?php
// Database configuration
$host = "localhost";
$user = "root";
$password = "";
$dbName = "student_db";
$port = 3307; 

// Connect to MySQL server (without specifying DB first)
$conn = new mysqli($host, $user, $password, "", $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS `$dbName`";
if (!$conn->query($sql)) {
    die("Database creation failed: " . $conn->error);
}

// Select the database
if (!$conn->select_db($dbName)) {
    die("Database selection failed: " . $conn->error);
}

// Create users table if it doesn't exist
$tableSql = "CREATE TABLE IF NOT EXISTS `users` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB";

if (!$conn->query($tableSql)) {
    die("Table creation failed: " . $conn->error);
}
?>