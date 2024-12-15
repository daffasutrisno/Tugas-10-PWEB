<?php
// File: config.php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'kursus_pesawat';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
