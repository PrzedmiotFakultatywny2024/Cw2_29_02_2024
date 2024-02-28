<!DOCTYPE html>
<html>
<head>
    <title>Przykład osadzonego kodu PHP z zewnętrznym CSS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Przykładowa tabela z PHP i zewnętrznym CSS</h1>
<?php
echo "<table>";
echo "<tr><th>ID</th><th>Nazwa</th><th>Cena</th></tr>";
echo "<tr><td>1</td><td>Produkt A</td><td>100 zł</td></tr>";
echo "<tr><td>2</td><td>Produkt B</td><td>200 zł</td></tr>";
echo "<tr><td>3</td><td>Produkt C</td><td>300 zł</td></tr>";
echo "</table>";
?>
</body>
</html>
