<?php
declare(strict_types=1);

function createSelect(array $array) {
    echo "<select name='opcion'>";
        foreach ($array as $key => $array2) {
            echo "<option value='$key'>";
            echo $array2["text"] ."(".$array2["precio"]."€)";
            echo "</option>";
        }
    echo "</select>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    <h2>Create a select dinamically</h2>
    <?php
    $marcas = [
        "cocacola" => ["text" => "Coca Cola", "precio" => 2.1],
        "pepsicola" => ["text" => "Pepsi Cola", "precio" => 2],
        "fantanaranja" => ["text" => "Fanta Naranja", "precio" => 2.5],
        "trinamanzana" => ["text" => "Trina Manzana", "precio" => 2.3]
    ];

    createSelect($marcas);
    ?>
</body>
</html>