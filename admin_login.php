<?php
session_start();

// Example credentials, replace with your validation logic
$admin_username = 'rohan';
$admin_password = '12345'; // Use hashed passwords in real scenarios

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $admin_username && $password === $admin_password) {
        // Successful login
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php'); // Redirect to the admin dashboard
        exit;
    } else {
        // Failed login
        echo "<p>Invalid username or password.</p>";
    }
}
?>
