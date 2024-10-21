<?php

declare(strict_types=1);

function people(?string $name, int $age, string $surname = "Apelido")
{
    echo "<strong>$name $surname is $age years old.</strong>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h2>Funciones</h2>
    <?php
    $nombre = null;
    $apellido = "deus";
    $edad = 1;

    echo "<h3>" . people($nombre, $edad) . "</h3>";
    ?>
</body>

</html>