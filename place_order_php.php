<?php
// backend/place_order.php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['user_id'])) {
        die("Unauthorized");
    }

    $user_id = $_SESSION['user_id'];
    $menu_item_id = $_POST['menu_item_id'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare("INSERT INTO orders (user_id, menu_item_id, quantity) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $menu_item_id, $quantity]);

    echo "<script>alert('Order placed successfully.'); window.location.href='../frontend/order_interface.html';</script>";
} else {
    header("Location: ../frontend/order_interface.html");
}
?>
