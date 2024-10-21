<?php

declare(strict_types=1);

function tripleCheck(array $array)
{
    $triple = false;
    $contador = 0;
    $comodin = "";

    foreach ($array as $value) {
        if ($value == $comodin) {
            $contador++;
        }

        if ($contador == 3) {
            $triple = true;
            return $triple;
        }
        $comodin = $value;
    }
    return $triple;
}

function countries(array $array){
    asort($array);
    foreach ($array as $key => $value) {
        echo "<p>The capital of $key is $value</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h2>Arrays</h2>
    <h2>Triple Check</h2>
    <?php
    $caso1 = array(1, 1, 2, 2, 1);
    $caso2 = array(1, 1, 2, 1, 2, 3);
    $caso3 = array(1, 1, 1, 2, 2, 2, 1);
    echo var_dump(tripleCheck($caso1));
    echo "<br>";
    echo var_dump(tripleCheck($caso2));
    echo "<br>";
    echo var_dump(tripleCheck($caso3));
    ?>
    <h2>Countries</h2>
    <?php
    $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

    countries($ceu);
    ?>
</body>

</html>