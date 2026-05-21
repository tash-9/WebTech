<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'library_db');
define('DB_USER', 'root');
define('DB_PASS', '');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
mysqli_query($conn, $sql);

mysqli_select_db($conn, DB_NAME);

$sql = "CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    author VARCHAR(100),
    category VARCHAR(50),
    status VARCHAR(20)
)";

if (!mysqli_query($conn, $sql)) {
    echo "Error creating books table: " . mysqli_error($conn) . "<br>";
}

$check = mysqli_query($conn, "SELECT COUNT(*) as total FROM books");
$row = mysqli_fetch_assoc($check);

if ($row['total'] == 0) {
    $sql = "INSERT INTO books (title, author, category, status) VALUES
        ('The Alchemist', 'Paulo Coelho', 'Fiction', 'Available'),
        ('Pride and Prejudice', 'Jane Austen', 'Classic Literature', 'Available'),
        ('Harry Potter and the Sorcerer\'s Stone', 'J. K. Rowling', 'Fantasy', 'Available'),
        ('Great Expectations', 'Charles Dickens', 'Classic Literature', 'Not Available'),
        ('A Brief History of Time', 'Stephen Hawking', 'Science', 'Available'),
        ('The Diary of a Young Girl', 'Anne Frank', 'Biography', 'Not Available'),
        ('Atomic Habits', 'James Clear', 'Self Development', 'Available'),
        ('Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Finance', 'Available')";

    mysqli_query($conn, $sql);
}
?>