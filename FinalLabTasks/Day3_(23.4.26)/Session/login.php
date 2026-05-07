<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Check user from database
    $stmt = $conn->prepare("SELECT id, full_name, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verify hashed password
        if (password_verify($password, $user['password'])) {

            // Store user information in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user'] = $user['full_name'];
            $_SESSION['user_email'] = $user['email'];

            // Store email in cookie for next login autofill
            setcookie("user_email", $user['email'], time() + (86400 * 30), "/");

            // Store last login time in cookie
            setcookie("last_login", date("Y-m-d H:i:s"), time() + (86400 * 30), "/");

            header("Location: dashboard.php");
            exit();

        } else {
            echo "Invalid password.";
            echo "<br><a href='s_html.php'>Try again</a>";
        }
    } else {
        echo "No user found with this email.";
        echo "<br><a href='s_html.php'>Try again</a>";
    }

    $stmt->close();

} else {
    header("Location: s_html.php");
    exit();
}
?>