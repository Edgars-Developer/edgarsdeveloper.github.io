<?php
$servername = "localhost";
$username = "root";
$password = " ";
$db = "webtest";

try {
    $conn = new PDO("mysql:host=$servername; $db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
    require_once 'crud.php';
    $crud = new crud($conn);
?>