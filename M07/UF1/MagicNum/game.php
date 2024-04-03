<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Num</title>
</head>
<body>
    <h1>Adivina el número màgic</h1>
    <p>Acabo de pensar en un número entre el 0 y el 10 (incluidos). ¡Adivínalo!</p>
    <?php
    // Genera el número secreto solo si no está establecido ya
    if (!isset($numSecreto)) {
        $numSecreto = rand(0,10);
        echo "$numSecreto<br>";
    }

    if(isset($_GET['submit'])) {
        $numInput = $_GET['numero'];
        if ($numInput == $numSecreto) {
            echo "¡Has acertado!";
        } elseif ($numInput > $numSecreto) {
            echo "El número es más grande";
        } else {
            echo "El número es menor";
        }
    }
    ?>
    <form method="get" action="">
        <input type="text" id="numero_magico" name="numero" max="10" />
        <button type="submit" name="submit">Envia</button>
    </form>
</body>
</html>
