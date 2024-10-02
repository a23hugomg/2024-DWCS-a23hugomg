<html>
    <head>
        <title>DWCS</title>
        <meta charset="utf-8">
        <?php
	      echo "<title>Factorial of a number</title>";
	    ?>
    </head>
    <body>
        <div class="container-fluid">
            <h1>Factorial</h1>
            <?php
                $numero = 4; //I'll calculate its factorial
                $factorial = 1;
                for($i=$numero; $i>1; $i--){
                    $factorial=$factorial * $i;
                }
                echo "<h3>The result is:".$factorial."</h3>";
            ?>
        </div>
    </body>
</html>