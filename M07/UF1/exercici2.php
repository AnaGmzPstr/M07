<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercici 2</h1>
    <p>Web que mostra els números del 0 al 100 amb un bucle for, però amb els números parells en negreta, cursiva i subratllat</p>
    
    <?php
    for ($i=0; $i < 100; $i++) { 
        if ($i%2==0) {
            echo "<strong><em><u>$i</u></em></strong> <br>";
        }  else{
            echo "$i <br>";
        }
    }
    ?>
</body>
</html>