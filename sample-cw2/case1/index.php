<?php
require_once 'Library.php';
require_once 'User.php';

// Użycie pełnej nazwy klasy z przestrzenią nazw
$book = new \MyApp\Library\Book();
$user = new \MyApp\User\User();

echo $book->getTitle(); // Wyświetla tytuł książki
echo $user->getUserName(); // Wyświetla nazwę użytkownika
