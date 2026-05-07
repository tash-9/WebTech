<?php
include 'db.php';
$message = '';

if (isset($_POST['register'])) {
    $name = htmlspecialchars(trim($_POST['full_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password_raw = $_POST['password'];

    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $message = "Email already registered. Please login.";
    } else {
        $hashed_password = password_hash($password_raw, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            $message = "Registration successful! Redirecting to login...";
            header("Refresh: 3; url=s_html.php");
        } else {
            $message = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $check->close();
}
?>

<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
<h2>Register</h2>
<?php if($message) echo "<p>$message</p>"; ?>
<form method="POST">
    Full Name: <input type="text" name="full_name" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit" name="register">Register</button>
</form>
<p>Already have an account? <a href="s_html.php">Login here</a></p>
</body>
</html>