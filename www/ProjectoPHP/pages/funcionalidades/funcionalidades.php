<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./funcionalidades.css?v=1" media=" screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../../img/gimnasio-blanco.png" height="100px" />
        </div>
        <div class="title">
            <h1>FitTrack</h1>
        </div>
        <div class="menu">
            <a href="../log-out/logout.php" sr><img src="../../img/cerrar-sesion-blanco.png" /></a>
        </div>
    </div>
    <hr>
    <div class="body">
        <div class="buttons">
            <a href="./addTraining/addTraining.php">New Training</a>
            <a href="./historyTraining/historyTraining.php">History</a>
            <!-- <a href="../log-out/logout.php">Log out</a> -->
        </div>
        <div class="subtitle">
            <h3>What do you want to do?</h3>
        </div>
    </div>
    <footer>
        <div class="box">
            <p>Contacto: +34 658 31 58 15 </p>
            <p>Siguenos en nuestras redes:
                <a href="https://www.instagram.com/?hl=es" target="_blank">Instagram</a>
                <a href="https://www.facebook.com/?locale=es_ES" target="_blank">Facebook</a>
            </p>
        </div>
    </footer>
</body>

</html>