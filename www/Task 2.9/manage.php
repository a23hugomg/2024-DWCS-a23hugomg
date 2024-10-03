<?php declare(strict_types=1);
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function recorrerArray($valor, array $array){
        foreach ($array as $key => $value) {
            if ($valor == $value) {
                return $key;
            }
        }
    }
?>
<html>
<head>
    <title>Novell Services Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        h3{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $languages = array(
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
            }else{
                $username = test_input($_POST["name"]);
            }

            if (empty($_POST["language"]) && ($_POST["language"]!=0)) {
                $errorSubject = "*El lenguaje es obligatorio";
            }else{
                $subject = test_input($_POST["language"]);
            }
            
            if ($errorUser == "") {
        ?>

    <h2><?php echo $username; ?> wants to enrol in the following subjects: <?php echo recorrerArray($subject, $languages) ?></h2>
    <a href="./manage2.php?name=<?php echo $username?>&subject=<?php echo $subject ?>">Siguiente pag</a>

    <?php
        }else{
            echo "<h3>$errorUser</h3>";
            ?>
            <br><a href="formulario.php">Volver atrás</a>
    <?php
        }
    }
    ?>
</body>
</html>