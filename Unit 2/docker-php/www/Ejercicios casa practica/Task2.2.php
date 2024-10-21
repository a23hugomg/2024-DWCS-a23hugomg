<?php

declare(strict_types=1);

function potencia(int $num1, int $num2 = 2)
{
    $resultado = 1;
    for ($i = 0; $i < $num2; $i++) {
        $resultado = $resultado * $num1;
    }
    return $resultado;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia</title>
</head>

<body>
    <h2>Potencia de un número</h2>
    <?php
    $base = 2;
    $exponente = 4;
    try {
        echo "<h3>$base elevado a $exponente es: " . potencia($base, $exponente) . "</h3>";
    } catch (\Throwable $error) {
        $error = "Los parámetros tienen que ser de tipo int";
        echo "<h2 style='color:red;'>$error</h2>";
    }
    ?>
</body>

</html>