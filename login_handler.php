<?php
// backend/login.php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../frontend/dashboard.html");
        exit();
    } else {
        echo "<script>alert('Invalid credentials'); window.location.href='../frontend/login.html';</script>";
    }
} else {
    header("Location: ../frontend/login.html");
}
?>
