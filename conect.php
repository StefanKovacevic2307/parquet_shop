<?php
$conn = new mysqli('localhost', 'root', '', 'parket_base');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
