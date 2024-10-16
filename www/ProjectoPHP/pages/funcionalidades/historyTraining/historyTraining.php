<?php
session_start();

function recorrerEntrenamientos(array $entrenamientos)
{
    if (!empty($entrenamientos)) {
        foreach ($entrenamientos as $entrenamiento) {
            echo "<ul>Entrenamiento día: " . $entrenamiento["workoutDate"]."&nbsp;";
            mostrarEntrenamiento($entrenamiento);
            echo "</ul>";
        }
    } else {
        echo "<h2>There are no workouts recorded.</h2>";
    }
}

function mostrarEntrenamiento(array $entrenamiento)
{
    echo "<strong>Exercise:</strong>" . $entrenamiento["exerciseType"] . "&nbsp";
    echo "<strong>Minutes:</strong>" . $entrenamiento["duration"] . "&nbsp";
    echo "<strong>Intensity:</strong>" . $entrenamiento["intensity"] . "&nbsp";
    echo "<strong>Fecha:</strong>" . $entrenamiento["workoutDate"] . "&nbsp";
    if (!empty($entrenamiento["equipment"]) ) {
        echo "<strong>Equiped:</strong>" . $entrenamiento["equipment"] . "&nbsp";
    }
    if (!empty($entrenamiento["calories"])) {
        echo "<strong>Calories:</strong>" . $entrenamiento["calories"] . "&nbsp";
    }
    if (!empty($entrenamiento["comments"])) {
       echo "<strong>Comments:</strong>" . $entrenamiento["comments"] . "&nbsp";
    }
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
            <h2>Entrainaments:</h2>
            <div class="entrenamientos">
                <?php
                if (isset($_SESSION["entrenamientos"])) {
                    $array = $_SESSION["entrenamientos"];
                    recorrerEntrenamientos($array);
                } else {
                    echo "<h2>There are no workouts recorded.</h2>";
                }
                ?>
            </div>
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