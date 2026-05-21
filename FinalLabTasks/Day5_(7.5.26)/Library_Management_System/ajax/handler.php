<?php
require_once("../controller/bookController.php");

if (isset($_POST['action'])) {

    $action = $_POST['action'];

    if ($action == "add") {
        addBookController($_POST);
    }

    if ($action == "fetch") {
        $result = getBooksController();

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['author']}</td>
                    <td>{$row['category']}</td>
                    <td>{$row['status']}</td>
                    <td>
                        <button class='editBtn' onclick='editBook({$row['id']})'>Edit</button>
                        <button class='deleteBtn' onclick='deleteBook({$row['id']})'>Delete</button>
                    </td>
                  </tr>";
        }
    }

    if ($action == "get") {
        $book = getBookByIdController($_POST['id']);
        echo json_encode($book);
    }

    if ($action == "update") {
        updateBookController($_POST);
    }

    if ($action == "delete") {
        deleteBookController($_POST['id']);
        mysqli_query($conn, "ALTER TABLE books AUTO_INCREMENT = 1");
    }
}
?>