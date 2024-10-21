<?php

declare(strict_types=1);
function dinamicSelect(array $array)
{
    foreach ($array as $key => $array2) {
        echo "<option value=$key>";
        echo $array2["text"] . " (" . $array2["precio"] . "€)";
        echo "</option>";
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>

<head>
    <title>formSale</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <h2>Ejercicio marcas y precios array</h2>
        <?php
        $cantidad = $precioTotal = 0;
        $errores = $marca = "";
        $marcas = array(
            "cocacola" => array("text" => "Coca Cola", "precio" => 2.1),
            "pepsicola" => array("text" => "Pepsi Cola", "precio" => 2),
            "fantanaranja" => array("text" => "Fanta Naranja", "precio" => 2.5),
            "trinamanzana" => array("text" => "Trina Manzana", "precio" => 2.3)
        );
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["cantidad"] == 0) {
                $cantidad = test_input($_POST["cantidad"]);
            } elseif (empty($_POST["cantidad"])) {
                $errores = "El campo no puede estar vacio";
            } elseif ($_POST["cantidad"] < 0) {
                $errores = "La cantidad no puede ser menor que 0";
            } else {
                $cantidad = test_input($_POST["cantidad"]);
            }
            $marca = $_POST["opcion"];
            $precio = $marcas[$_POST["opcion"]]["precio"];
            $precioTotal = $cantidad * $precio;
        }
        ?>

        <form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <select name='opcion'>
                <?php dinamicSelect($marcas); ?>
            </select>
            <br><input type="number" value="1" name="cantidad" />
            <br><input type="submit" />
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($errores == "") {
                echo "<h2>El producto $marca con precio $precio y cantidad $cantidad suma un total de: $precioTotal</h2>";
            } else {
                echo "<h2>$errores</h2>";
            }
        }
        ?>
    </div>
</body>

</html>