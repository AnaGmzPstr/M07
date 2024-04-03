<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercici 3</h1>
    <p>Web que mostra la taula de multiplicar del 7</p>
    <?php
    for ($i=0; $i < 10; $i++) { 
        echo "7x$i= ".(7*$i)."<br>";
    }
    ?>
</body>
</html>