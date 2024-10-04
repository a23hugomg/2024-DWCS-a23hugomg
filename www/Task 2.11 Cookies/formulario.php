<?php

declare(strict_types=1);
$username = $subject = "";
$subjects = array(
    "Java Programming" => 0,
    "Web Design" => 1,
    "Dockers administration" => 2,
    "Django framework" => 3,
    "Mongo database" => 4
);
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function createSelect(array $array)
{
    foreach ($array as $subject => $value) {
        echo    "<option value=\"$value\">";
        echo    $subject;
        echo    "</option>";
    }
}
if (isset($_POST["boton"])) {
    if (empty($_POST["name"])) {
        $errorUser = "El nombre es obligatorio";
    } else {
        $username = test_input($_POST["name"]);

        $cookie_name = "username";
        $cookie_value = $username;
        setrawcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header("Location: manage.php");
    }
    if (empty($_POST["subject"])) {
        $errorUser = "El nombre es obligatorio";
    } else {
        $subject = test_input($_POST["subject"]);
        $cookie_name1 = "subject";
        $cookie_value1 = $subject;
        setrawcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
        header("Location: manage.php");
    }
}


?>
<html>

<head>
    <title>Form Cookies</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        form {
            padding-top: 20px;
        }

        .espacio {
            height: 10px;
        }
    </style>
</head>

<body>
    <h2>Form using cookies.</h2>

    <?php
    $subjects = array(
        "Java Programming" => 0,
        "Web Design" => 1,
        "Dockers administration" => 2,
        "Django framework" => 3,
        "Mongo database" => 4
    );
    $username = $subject = "";
    $errorUser = $errorSubject = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $errorUser = "El nombre es obligatorio";
        } else {
            $username = test_input($_POST["name"]);
        }

        if (empty($_POST["subject"]) && ($_POST["subject"] != 0)) {
            $errorSubject = "*El lenguaje es obligatorio";
        } else {
            $subject = test_input($_POST["subject"]);
        }

        if ($errorUser == "") {
    ?>

            <h2><?php echo $username; ?> wants to enrol in the following subjects: <?php echo recorrerArray($subject, $subjects) ?></h2>
            <a href="./manage2.php?name=<?php echo $username ?>&subject=<?php echo $subject ?>">Siguiente pag</a>

        <?php
        } else {
            echo "<h3>$errorUser</h3>";
        ?>
            <br><a href="formulario.php">Volver atrás</a>
        <?php
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $classes = $errorClass = "";
        if (empty($_GET["name"])) {
            $errorUser = "El nombre es obligatorio";
        } else {
            $username = test_input($_GET["name"]);
        }

        if (empty($_GET["subject"]) && ($_GET["subject"] != 0)) {
            $errorSubject = "*El lenguaje es obligatorio";
        } else {
            $subject = test_input($_GET["subject"]);
        }

        if (empty($_GET["classes"])) {
            $errorClass = "*Las clases son obligatorias";
        } else {
            $classes = test_input($_GET["classes"]);
        }

        if ($errorClass == "" && $errorUser == "") { ?>

            <h2><?php echo $username; ?> wants to enrol in the following subjects: <?php echo recorrerArray($subject, $subjects) ?> and <?php echo $classes ?> classes.</h2><br>
            <h2><?php echo $classes ?> is the selected option.</h2>

    <?php
        } else {
            echo "<h3>$errorClass</h3>";
        }
    }
    if (count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
    } else {
        echo "Cookies are disabled.";
    }
    ?>
</body>

</html>