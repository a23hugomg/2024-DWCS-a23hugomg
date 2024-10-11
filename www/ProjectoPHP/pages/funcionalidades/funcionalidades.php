<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header("Location: login.php?redirigido=true");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./log-in-style.css?v=3" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../../img/gimnasio (1).png" height="100px" />
        </div>
        <div class="title">
            <h1>FitTrack</h1>
        </div>
        <div class="menu">
            <a href="../index.php" sr><img src="../../img/hogar.png"/></a>
        </div>
    </div>
    <hr>
    <div class="body">
        <?php echo "Welcome " . $_SESSION['usuario']; ?>
    </div>
    <footer>
        <div class="box">
        <p>Contacto: +34 658 31 58 15 </p> 
        <p>Siguenos en nuestras redes: 
            <a href="https://www.instagram.com/?hl=es">Instagram</a>
            <a href="https://www.facebook.com/?locale=es_ES">Facebook</a>
        </p>
        </div>
    </footer>
</body>

</html>