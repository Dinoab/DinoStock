<?php
// DinoStock AI - Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'dinostock_db');
define('DB_USER', 'root');
define('DB_PASS', ''); // Default XAMPP password is empty

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    header('Content-Type: application/json');
    die(json_encode(['error' => 'Database Connection Failed: ' . $e->getMessage()]));
}
?>