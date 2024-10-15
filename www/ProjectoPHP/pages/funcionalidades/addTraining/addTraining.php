<?php
declare(strict_types=1);
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$exercise = $duration = $intensity = $date = $equipment = $calories = $comments = "";
$exerciseError = $durationError = $intensityError = $dateError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["exerciseType"])) {
        $exerciseError = "The exercise type is";
    } else {
        $exercise = test_input($_POST["exerciseType"]);
        setcookie("exercise", $exercise, time() + (86400 * 30), "/");
    }

    if (empty($_POST["duration"])) {
        $durationError = "The duration is";
    } else {
        $duration = test_input($_POST["duration"]);
        setcookie("duration", $duration, time() + (86400 * 30), "/");
    }

    if (empty($_POST["intensity"])) {
        $intensityError = "The intensity is";
    } else {
        $intensity = test_input($_POST["intensity"]);
        setcookie("intensity", $intensity, time() + (86400 * 30), "/");
    }

    if (empty($_POST["workoutDate"])) {
        $dateError = "The date is";
    } else {
        $date = test_input($_POST["workoutDate"]);
        setcookie("workoutDate", $date, time() + (86400 * 30), "/");
    }
    header("Location: /ProjectoPHP/pages/funcionalidades/funcionalidades.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./addTraining.css?v=2" media="screen" />
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
            <a href="../../index.php" sr><img src="../../../img/cerrar-sesion.png" /></a>
        </div>
    </div>
    <hr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($exerciseError == "" && $durationError = "" && $intensityError = "" && $dateError = "") {
                $_COOKIE['form'] = "filled";
            }
        }
    ?>
    <div class="body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="exerciseType">Exercise Type:</label>
            <select id="exerciseType" name="exerciseType">
                <option value="" disabled selected>Select an exercise type</option>
                <option value="Running">Running</option>
                <option value="Cycling">Cycling</option>
                <option value="Swimming">Swimming</option>
                <option value="Weightlifting">Weightlifting</option>
                <option value="Yoga">Yoga</option>
                <option value="HIIT">HIIT (High-Intensity Interval Training)</option>
                <option value="Pilates">Pilates</option>
            </select>
            <div class="error">
                <?php echo $exerciseError;?>
            </div>

            <label for="duration">Duration (in minutes):</label>
            <input type="number" id="duration" name="duration">
            <div class="error">
                <?php echo $durationError;?>
            </div>

            <label for="intensity">Workout Intensity:</label>
            <select id="intensity" name="intensity">
                <option value="" disabled selected>Select intensity level</option>
                <option value="Low">Low</option>
                <option value="Moderate">Moderate</option>
                <option value="High">High</option>
            </select>
            <div class="error">
                <?php echo $intensityError;?>
            </div>

            <label for="workoutDate">Date of Workout:</label>
            <input type="date" id="workoutDate" name="workoutDate">
            <div class="error">
                <?php echo $dateError;?>
            </div>

            <label for="equipment">Equipment Used (Optional):</label>
            <input type="text" id="equipment" name="equipment">

            <label for="calories">Calories Burned (Optional):</label>
            <input type="number" id="calories" name="calories">

            <label for="comments">Comments (Optional):</label>
            <textarea id="comments" name="comments" rows="3"></textarea>

            <input type="submit" value="Submit Workout">
        </form>
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