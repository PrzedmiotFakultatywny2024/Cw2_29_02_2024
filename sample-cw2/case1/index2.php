<?php
include 'Library.php';
include 'User.php';

// Importowanie klas z przestrzeni nazw
use MyApp\Library\Book;
use MyApp\User\User;

// Teraz można tworzyć obiekty bez podawania pełnej przestrzeni nazw
$book = new Book();
$user = new User();

echo $book->getTitle(); // Wyświetla tytuł książki
echo $user->getUserName(); // Wyświetla nazwę użytkownika
