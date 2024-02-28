<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Przykład strony z PHP</title>
</head>
<body>

<h1>Witaj na mojej stronie!</h1>
<ol>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Element $i</li>";
    }
    ?>
</ol>

</body>
</html>
