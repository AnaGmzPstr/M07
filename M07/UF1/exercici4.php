<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercici 4</h1>
    <p>Web que mostra els números del 0 al 10, fent que cada número siguib in hipervincle a la pàgina corresponent de la Vikipedia</p>

    <?php
    for ($i=1; $i <= 10 ; $i++) { 
        echo "<li><a href='https://es.wikipedia.org/wiki/$i'>Enllaç $i</a></li><br>";
    }
    ?>
</body>
</html>