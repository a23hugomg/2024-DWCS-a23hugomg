<?php declare(strict_types=1);
    function calcularFactorial($factorial): int{
        $resultado = 1;

        if ($factorial<0) {
            throw new Exception("<h2>Imposible calcular el factorial de un número menor que 0</h2>");
        }else{
            for ($i=$factorial; $i > 1; $i--) { 
                $resultado = $resultado * $i;
            }        
            return $resultado;
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
            <?php
            try {
                define("NUM",-1);
                echo "<h2>El factorial de ".NUM." es :" .calcularFactorial(NUM). "</h2>";
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            ?>
        </div>
    </body>
</html>