<?php
$host = "localhost";
$user = "root"; // Pentru XAMPP, username-ul implicit este 'root'
$password = ""; // Nu are parolă implicită
$database = "food-order";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}
?>
