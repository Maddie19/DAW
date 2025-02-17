<?php
$host = "localhost"; // Serverul MySQL (în XAMPP este 'localhost')
$user = "root"; // Utilizatorul MySQL implicit din XAMPP
$password = ""; // În mod normal, XAMPP nu folosește parolă pentru root
$database = "food-order"; // Asigură-te că aceasta este numele corect al bazei de date

// Conectare la baza de date
$conn = new mysqli($host, $user, $password, $database);

// Verificare conexiune
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}
?>
