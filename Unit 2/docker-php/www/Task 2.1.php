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
        $factorial = 5;
        $resultado = 1;

        for ($i = $factorial; $i > 1; $i--) {
            $resultado = $resultado * $i;
        }

        echo "<h2>El factorial de $factorial es: $resultado</h2>";
        ?>
    </div>
</body>

</html>