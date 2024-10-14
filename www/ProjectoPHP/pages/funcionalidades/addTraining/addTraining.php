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
    <div class="body">
        <form action="POST">
            <label for="exerciseType">Exercise Type:</label>
            <select id="exerciseType" name="exerciseType" required>
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
            <input type="number" id="duration" name="duration" required>

            <label for="intensity">Workout Intensity:</label>
            <select id="intensity" name="intensity" required>
                <option value="" disabled selected>Select intensity level</option>
                <option value="Low">Low</option>
                <option value="Moderate">Moderate</option>
                <option value="High">High</option>
            </select>

            <label for="workoutDate">Date of Workout:</label>
            <input type="date" id="workoutDate" name="workoutDate" required>

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