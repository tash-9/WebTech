<?php
session_start();

$timeout = 30; // 30 seconds timeout for demonstration


if (!isset($_SESSION['user'])) {
    header("Location: s_html.php");
    exit();
}

if (time() - $_SESSION['start_time'] > $timeout) {

    session_unset();
    session_destroy();

    header("Location: s_html.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $user; ?></h2>

<p>You will be logged out after 30 seconds automatically.</p>

<a href="logout.php">Logout</a>

</body>
</html>