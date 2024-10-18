<?php

declare(strict_types=1);
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
?>
<html>

<head>
    <title>Novell Services Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        form {
            padding-top: 20px;
        }

        h3 {
            color: green;
        }

        .espacio {
            height: 10px;
        }
    </style>
</head>

<body>
    <h2>First practice using forms.</h2>
    <?php
    $subjects = array(
        "Java Programming" => 0,
        "Web Design" => 1,
        "Dockers administration" => 2,
        "Django framework" => 3,
        "Mongo database" => 4
    );
    $username = $subject = "";
    ?>

    <form method='POST' action="manage.php">
        <table>
            <tr aria-colspan="2">
                <td>Name and surnames:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr class="espacio"></tr>
            <tr>
                <td>Subject to enroll:</td>
                <td>
                    <select name="subject" id="1">
                        <?php createSelect($subjects); ?>
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