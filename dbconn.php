<?php

$conn = new PDO('mysql:host=localhost;dbname=projet_macron', 'root', '');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
