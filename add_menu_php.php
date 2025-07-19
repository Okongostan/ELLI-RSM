<?php
// backend/add_menu.php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO menu_items (name, price, category, description) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $price, $category, $description]);

    echo "<script>alert('Menu item added successfully.'); window.location.href='../frontend/menu_manager.html';</script>";
} else {
    header("Location: ../frontend/menu_manager.html");
}
?>
