<?php
$servername = "localhost";
$database = "euro24";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$sql = "SELECT * FROM uitslagen";
$stmt = $conn->prepare($sql);
$stmt->execute();
$euro24 = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




