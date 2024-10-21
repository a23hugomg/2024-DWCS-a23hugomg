<?php

declare(strict_types=1);
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function createSelect(array $array)
{
    echo "<select name='opcion'>";
    foreach ($array as $key => $array2) {
        echo "<option value='$key'>";
        echo $array2["text"] . "(" . $array2["precio"] . "€)";
        echo "</option>";
    }
    echo "</select>";
}

function price($precio, $cantidad): float
{
    $precioTotal = 0.0;

    $precioTotal = $precio * $cantidad;

    return $precioTotal;
}

$number = $numberErr = "";
$error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["number"])) {
        $numberErr = "Number of unities is required";
        $error = true;
    } else {
        $number = test_input($_POST["number"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>Form</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <?php
        $marcas = [
            "cocacola" => ["text" => "Coca Cola", "precio" => 2.1],
            "pepsicola" => ["text" => "Pepsi Cola", "precio" => 2],
            "fantanaranja" => ["text" => "Fanta Naranja", "precio" => 2.5],
            "trinamanzana" => ["text" => "Trina Manzana", "precio" => 2.3]
        ];

        createSelect($marcas);
        ?>
        <p>Number of unities:
            <input type="number" name="number" id="number"><?php echo "<p style='color:red;'>$numberErr</p>" ?>
        </p>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($error) {
        } else {
            $cantidad = $_POST["number"];
            $marca = $_POST["opcion"];
            $precio = $marcas[$_POST["opcion"]]["precio"];
            echo "<h2>You have asked for $cantidad bottles of $marca. Total price to pay: " . price($precio, $cantidad) . " euros.</h2>";
        }
    }
    ?>

</body>

</html>