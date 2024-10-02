<?php declare(strict_types=1);
    function nombre(?string $nombre, int $age, $apellido = "Apelido"){
        echo "<p><b>$nombre $apellido is $age years old.<b></p>";
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
            define("nom","fran");
            define("ape","coco");
            define("edad",45);
            nombre(nom,edad,ape);
            nombre(null,15,ape);
            nombre(null,90);
            ?>
        </div>
    </body>
</html>