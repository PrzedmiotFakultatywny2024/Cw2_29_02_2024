<?php
// przetwarzanie.php
$imie = $_POST['imie'];
$email = $_POST['email'];

// Tutaj możesz zrobić coś z przesłanymi danymi, na przykład zapisać je do bazy danych lub wysłać email

echo "Przesłane imię: " . $imie . "<br>";
echo "Przesłany email: " . $email;
?>
