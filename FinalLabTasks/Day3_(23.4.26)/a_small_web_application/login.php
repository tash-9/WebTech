<?php
session_start();
include 'db.php';

if (!isset($_POST['login'])) {
    header("Location: s_html.php");
    exit();
}

$email = trim($_POST['email']);
$password = $_POST['password'];

// Check user from database
$stmt = $conn->prepare("SELECT id, full_name, password FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $full_name, $hashed_password);

if ($stmt->num_rows === 1) {
    $stmt->fetch();
    if (password_verify($password, $hashed_password)) {
        session_regenerate_id(true); // Secure session
        $_SESSION['user_id'] = $id;
        $_SESSION['user'] = $full_name;
        $_SESSION['user_email'] = $email;
        $_SESSION['login_time'] = time(); // for session timeout

        // Cookies
        setcookie("user_email", $email, time() + 86400*30, "/");
        setcookie("last_login", date("Y-m-d H:i:s"), time() + 86400*30, "/");

        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: s_html.php?error=Invalid password");
        exit();
    }
} else {
    header("Location: s_html.php?error=No user found with this email");
    exit();
}

$stmt->close();
?>