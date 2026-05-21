<?php
require_once("../model/bookModel.php");

function addBookController($data)
{
    return addBook(
        $data['title'],
        $data['author'],
        $data['category'],
        $data['status']
    );
}

function getBooksController()
{
    return getBooks();
}

function getBookByIdController($id)
{
    return getBookById($id);
}

function updateBookController($data)
{
    return updateBook(
        $data['id'],
        $data['title'],
        $data['author'],
        $data['category'],
        $data['status']
    );
}

function resetAutoIncrement() {
    global $conn;
    mysqli_query($conn, "ALTER TABLE books AUTO_INCREMENT = 1");
}

function deleteBookController($id)
{
    return deleteBook($id);
    resetAutoIncrement();
}
?>