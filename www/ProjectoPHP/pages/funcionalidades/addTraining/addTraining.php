<?php

declare(strict_types=1);
session_start();
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$exerciseType = $duration = $intensity = $workoutDate = $equipment = $calories = $comments = "";
$error ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $exerciseType = isset($_POST["exerciseType"])? test_input($_POST["exerciseType"]) : "";
    $duration = test_input($_POST["duration"]);
    $intensity = isset($_POST["intensity"]) ? test_input($_POST["intensity"]) : "";
    $workoutDate = test_input($_POST["workoutDate"]);
    $equipment = test_input($_POST["equipment"]);
    $calories = test_input($_POST["calories"]);
    $comments = test_input($_POST["comments"]);

    if ((!empty($exerciseType))&& !empty($duration) && !empty($intensity) && !empty($workoutDate)) {

        $entrenamiento = [
            "exerciseType" => $exerciseType,
            "duration" => $duration,
            "intensity" => $intensity,
            "workoutDate" => $workoutDate,
            "equipment" => $equipment,
            "calories" => $calories,
            "comments" => $comments
        ];

        if (!isset($_SESSION["entrenamientos"])) {
            $_SESSION["entrenamientos"] = [];
        }

        $_SESSION["entrenamientos"][] = $entrenamiento;
       
        header("Location: /ProjectoPHP/pages/funcionalidades/historyTraining/historyTraining.php");
        exit();
    } else {
        $error = "Please complete all the required fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./addTraining.css?v=1" media="screen" />
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
    <?php if (!empty($error))
        echo "<h2 style=\"color:red; text-align: center;\">$error</h2>";
    ?>
    <div class="body">
                    
        <div class="buttons">
            <a href="./addTraining.php">New Training</a>
            <a href="../historyTraining/historyTraining.php">History</a>
            <a href="../funcionalidades.php">Go Back</a>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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

            <label for="duration">Duration (in minutes):</label>
            <input type="number" id="duration" name="duration">

            <label for="intensity">Workout Intensity:</label>
            <select id="intensity" name="intensity">
                <option value="" disabled selected>Select intensity level</option>
                <option value="Low">Low</option>
                <option value="Moderate">Moderate</option>
                <option value="High">High</option>
            </select>

            <label for="workoutDate">Date of Workout:</label>
            <input type="date" id="workoutDate" name="workoutDate">

            <label for="equipment">Equipment Used (Optional):</label>
            <input type="text" id="equipment" name="equipment">

            <label for="calories">Calories Burned (Optional):</label>
            <input type="number" id="calories" name="calories">

            <label for="comments">Comments (Optional):</label>
            <textarea id="comments" name="comments" rows="3"></textarea>
            
            <input type="submit" value="Submit Workout" class="submit">
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