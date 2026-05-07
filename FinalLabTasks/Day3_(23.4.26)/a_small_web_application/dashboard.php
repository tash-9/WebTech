<?php
session_start();

// Session timeout: 30 min
$timeout = 1800;
if (isset($_SESSION['login_time']) && (time() - $_SESSION['login_time']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: s_html.php?error=Session expired");
    exit();
}

// Check login
if (!isset($_SESSION['user'])) {
    header("Location: s_html.php");
    exit();
}

$_SESSION['login_time'] = time(); // update last activity

$user = $_SESSION['user'];
$last_login = $_COOKIE['last_login'] ?? "No last login time found.";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Welcome, <?= htmlspecialchars($user); ?></h2>
<p>You are successfully logged in.</p>
<p>Last Login Time: <?= htmlspecialchars($last_login); ?></p>
<p>Email: <?= htmlspecialchars($_SESSION['user_email']); ?></p>
<a href="logout.php">Logout</a>
</body>
</html>