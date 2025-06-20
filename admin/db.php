<?php
$host = 'localhost';
$dbname = 'whenever';
$username = 'root';
$password = ''; // Điền mật khẩu của bạn nếu có

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
