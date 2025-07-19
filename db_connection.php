<?php
// backend/db.php
$host = 'localhost';
$dbname = 'erms';
$user = 'root'; // Change if using another DB user
$pass = '';     // Add password if required

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
