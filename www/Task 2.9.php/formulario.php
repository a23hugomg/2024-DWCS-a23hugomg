<?php declare(strict_types=1);
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function createSelect(array $array){
        foreach ($array as $language => $value) {
            echo    "<option value=".$value["text"].">";
            echo    $language;
            echo    "</option>";
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
            form{
                padding-top: 20px;
            }
            h3{
                color: green;
            }
            .espacio{
					height:10px;
		    }
            span{
                padding-left: 5px;
                font-size: 14px;
                color: red;
            }
        </style>
    </head>
    <body>
        <h2>First practice using forms.</h2>
        <?php
        $languages = array(
            "Java Programming" => array("value" => 0),
            "Web Design" => array("value" => 1),
            "Dockers administration" => array("value" => 2),
            "Django framework" => array("value" => 3),
            "Mongo database" => array("value" => 4)
        );
        $username = $subject = "";
        // $errorUser = $errorSubject = "";
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     if (empty($_POST["name"]) || $_POST["name"] == "") {
        //         $errorUser = "*El nombre es obligatorio";
        //     }else{
        //         $username = test_input($_POST["nombre"]);
        //     }

        //     if (empty($_POST["languages"]) || $_POST["languages"] == "") {
        //         $errorSubject = "*El lenguaje es obligatorio";
        //     }else{
        //         $subject = test_input($_POST["languages"]);
        //     }
        // }
        ?>

        <form method='POST' action="manage.php">
            <table>
                <tr aria-colspan="2">
                    <td>Name and surnames:</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td>Subject to enroll:</td>
                    <td>
                        <select name="languages" id="1">
                            <?php createSelect($languages);?>
                        </select>
                    </td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td id="buttons"><input type="submit" value="Send data"></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>