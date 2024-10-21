<?php

declare(strict_types=1);

function factorial(int $numero)
{
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado = $resultado * $i;
    }
    return $resultado;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un numero:</title>
</head>

<body>
    <h2>Factorial de un número</h2>
    <?php
    $numero = 10;
    echo "<h3>El factorial de $numero es " . factorial($numero) . " </h3>"
    ?>
</body>

</html>