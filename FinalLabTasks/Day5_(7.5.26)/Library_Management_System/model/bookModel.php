<?php
require_once ("../config/db.php");

function addBook($title, $author, $category, $status) {
    global $conn;
    $sql = "INSERT INTO books(title, author, category, status)
            VALUES('$title','$author','$category','$status')";
    return mysqli_query($conn, $sql);
}

function getBooks() {
    global $conn;
    $sql = "Select * from books";
    return mysqli_query($conn, $sql);
}

function getBookById($id) {
    global $conn;
    $sql = "SELECT * FROM books WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function updateBook($id, $title, $author, $category, $status) {
    global $conn;
    $sql = "UPDATE books SET
            title='$title',
            author='$author',
            category='$category',
            status='$status'
            WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteBook($id) {
    global $conn;
    $sql = "DELETE FROM books WHERE id=$id";
    return mysqli_query($conn, $sql);
}
?>