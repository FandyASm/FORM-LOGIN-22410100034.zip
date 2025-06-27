<?php
session_start();

// Hardcoded username & password
$valid_user = 'admin';
$valid_pass = '123456';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    header("Location: index.php?error=Username atau password salah!");
}
?>
