<?php
// przetwarzanie.php
$imie = $_GET['imie']; // Użycie $_GET zamiast $_POST
$email = $_GET['email']; // Użycie $_GET zamiast $_POST

// Tutaj możesz zrobić coś z przesłanymi danymi, na przykład zapisać je do bazy danych lub wysłać email

echo "Przesłane imię: " . $imie . "<br>";
echo "Przesłany email: " . $email;
?>
