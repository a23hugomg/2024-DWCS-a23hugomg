<?php declare(strict_types=1);
    function calcularPotencia($base, $exponente = 2): int{
        $resultado = 1;
        $a=0;
        while ($a < $exponente) {
            $resultado=$resultado*$base;
            $a++;
        }
        return $resultado;
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
            <?php
            //try {
            define("base",3);
            define("exponente",5);
            echo "<h2>El numero ".base." elevado a " .exponente. " es :".calcularPotencia(base,exponente). "</h2>";
            // } catch (Exception $e) {
            //     echo $e->getMessage();
            // }
            
            ?>
        </div>
    </body>
</html>