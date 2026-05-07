<?php
$saved_email = $_COOKIE['user_email'] ?? "";
$error_msg = $_GET['error'] ?? "";
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login Page</h2>
<?php if($error_msg) echo "<p style='color:red;'>".htmlspecialchars($error_msg)."</p>"; ?>

<form action="login.php" method="POST">
    Email:
    <input type="email" name="email" value="<?= htmlspecialchars($saved_email); ?>" required><br><br>
    Password:
    <input type="password" name="password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>

<p>New user? <a href="register.php">Register here</a></p>
</body>
</html>