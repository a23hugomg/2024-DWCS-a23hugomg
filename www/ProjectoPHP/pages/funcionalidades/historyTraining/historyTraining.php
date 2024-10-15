<?php
session_start();

function recorrerEntrenamientos($entrenamientos)
{
    if (!empty($entrenamientos)) {
        foreach ($entrenamientos as $entrenamiento) {
            echo "<li>Entrenamiento día: " . $_SESSION["entrenamientos"]["workoutDate"];
            mostrarEntrenamiento($entrenamiento);
            echo "</li";
        }
    } else {
        echo "<h2>There are no workouts recorded.</h2>";
    }
}

function mostrarEntrenamiento($entrenamiento)
{
    echo "<ul>Exercise:" . $_SESSION["entrenamientos"]["exerciseType"] . "</ul>";
    echo "<ul>Minutes:" . $_SESSION["duration"] . "</ul>";
    echo "<ul>Intensity:" . $_SESSION["intensity"] . "</ul>";
    echo "<ul>Fecha:" . $_SESSION["workoutDate"] . "</ul>";
    //    echo "<ul>Equiped:" . $_SESSION[""] . "</ul>";
    //    echo "<ul>Calories:" . $_SESSION[""] . "</ul>";
    //    echo "<ul>Comments:" . $_SESSION[""] . "</ul>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./historyTraining-style.css?v=1" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../../../img/gimnasio (1).png" height="100px" />
        </div>
        <div class="title">
            <h1>FitTrack</h1>
        </div>
        <div class="menu">
            <a href="../../log-out/logout.php" sr><img src="../../../img/cerrar-sesion.png" /></a>
        </div>
    </div>
    <hr>
    <div class="body">
        <div class="buttons">
            <a href="../addTraining/addTraining.php">New Training</a>
            <a href="../historyTraining/historyTraining.php">History</a>
            <a href="../funcionalidades.php">Go Back</a>
        </div>
        <div class="history">
            <?php
            if (isset($_SESSION["entrenamientos"])) {
                echo "<h2>Lista de entrenamientos:</h2>";
                echo "llegue";
                $array = $_SESSION["entrenamientos"];
                recorrerEntrenamientos($array);
            } else {
                echo "No hay datos para mostrar.";
            }
            ?>
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