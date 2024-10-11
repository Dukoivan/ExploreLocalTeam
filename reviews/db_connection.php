<?php
$host = 'localhost';
$db = 'login_register_db';
$user = 'root'; // Cambia esto por tu usuario de MySQL
$pass = ''; // Cambia esto por tu contraseña de MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
