<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Num</title>
</head>
<style>
    body{
        display: grid;
        justify-content: center;
    }
</style>
<body>
    <h1>Adivina el número màgic</h1>
    <p>Acabo de pensar en un número entre el 0 y el 10 (incluidos). ¡Adivínalo!</p>
    <?php
    if(isset($_GET['submit'])) {
        $numInput = $_GET['numero'];
        $numSecreto = $_GET['numSecreto']; // Obtiene el número secreto del campo oculto

        if ($numInput == $numSecreto) {
            echo "¡Has acertado!";
        } elseif ($numInput > $numSecreto) {
            echo "El número es más pequeño";
        } else {
            echo "El número es más grande";
        }
    } else {
        // Genera el número secreto si no se ha enviado el formulario
        $numSecreto = rand(0,10);
    }
    
    ?>
    <form method="get" action="game.php">
        <input type="hidden" name="numSecreto" value="<?php echo $numSecreto; ?>">
        <input type="text" id="numero_magico" name="numero" max="10" />
        <button type="submit" name="submit">Envia</button><br>
        <a href="game.php">Volver a jugar</a>
    </form>
</body>
</html>
