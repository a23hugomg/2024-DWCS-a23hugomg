<?php
session_start();

function recorrerEntrenamientos(array $entrenamientos)
{
    if (!empty($entrenamientos)) {
        foreach ($entrenamientos as $entrenamiento) {
            echo "<ul>Entrenamiento día: " . $entrenamiento["workoutDate"] . "&nbsp;";
            mostrarEntrenamiento($entrenamiento);
            echo "</ul>";
        }
    } else {
        echo "<h2>There are no workouts recorded.</h2>";
    }
}

function mostrarEntrenamiento(array $entrenamiento)
{
    echo "<li><strong>Exercise:</strong>" . $entrenamiento["exerciseType"] . "</li>";
    echo "<li><strong>Minutes:</strong>" . $entrenamiento["duration"] . "</li>";
    echo "<li><strong>Intensity:</strong>" . $entrenamiento["intensity"] . "</li>";
    echo "<li><strong>Fecha:</strong>" . $entrenamiento["workoutDate"] . "</li>";
    if (!empty($entrenamiento["equipment"])) {
        echo "<li><strong>Equiped:</strong>" . $entrenamiento["equipment"] . "</li>";
    }
    if (!empty($entrenamiento["calories"])) {
        echo "<li><strong>Calories:</strong>" . $entrenamiento["calories"] . "</li>";
    }
    if (!empty($entrenamiento["comments"])) {
        echo "<li><strong>Comments:</strong>" . $entrenamiento["comments"] . "</li>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./historyTraining-style.css?v=3" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../../../img/gimnasio-blanco.png" height="100px" />
        </div>
        <div class="title">
            <h1>FitTrack</h1>
        </div>
        <div class="menu">
            <a href="../../log-out/logout.php" sr><img src="../../../img/cerrar-sesion-blanco.png" /></a>
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