<?php

declare(strict_types=1);

function factorial(int $numero): int
{
    if ($numero < 0) {
        throw new Exception("El numero tiene que ser mayor que 0", 1);
    } else {
        $resultado = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $resultado = $resultado * $i;
        }
        return $resultado;
    }
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
    define("numero", 5);
    try {
        echo "<h3>El factorial de " . numero . " es " . factorial(numero) . " </h3>";
    } catch (\Throwable $error) {
        $error = "El numero tiene que ser mayor que 0";
        echo "<h2 style='color:red;'>$error</h2>";
    }
    ?>
</body>

</html>