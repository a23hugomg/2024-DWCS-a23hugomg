<?php declare(strict_types=1);
    function dinamicSelect(array $array){
        foreach ($array as $key => $array2) {
            echo "<option value=$key>";
            echo $array2["text"]." (" .$array2["precio"]. "€)";
            echo "</option>";
        }
    }
?>
<html>
    <head>
        <title>Factorial</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h2>Ejercicio marcas y precios array</h2>
            <?php
            $marcas = array(
                "cocacola" => array("text"=>"Coca Cola", "precio"=>2.1),
                "pepsicola" => array("text"=>"Pepsi Cola", "precio"=>2),
                "fantanaranja" => array("text"=>"Fanta Naranja", "precio"=>2.5),
                "trinamanzana" => array("text"=>"Trina Manzana", "precio"=>2.3)
            );            
            echo "<form>";
                echo "<select name='opcion'>";
                    dinamicSelect($marcas);
                echo "</select>";
            echo "</form>";
            ?>
        </div>
    </body>
</html>