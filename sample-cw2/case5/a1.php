<!DOCTYPE html>
<html>
<head>
    <title>Przykład osadzonego kodu PHP z CSS</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<h1>Przykładowa tabela z PHP i CSS</h1>
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
