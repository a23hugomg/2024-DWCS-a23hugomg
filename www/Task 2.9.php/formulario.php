<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
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
        $username = $subject = "";
        $errorUser = $errorSubject = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nombre"]) || $_POST["nombre"] == "") {
                $errorUser = "*El nombre no puede estar vacio";
            }else{
                $username = test_input($_POST["nombre"]);
            }

            if (empty($_POST["contraseña"]) || $_POST["contraseña"] == "") {
                $errorPass = "*La contraseña no puede estar vacio";
            }else{
                $password = test_input($_POST["contraseña"]);
            }
        }
        ?>

        <form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table>
                <tr aria-colspan="2">
                    <td>Name and surnames:</td>
                    <td><input type="text" name="Name" value="<?php echo $username?>"></td>
                    <td><span class="error"><?php echo $errorUser?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td>Subject to enroll:</td>
                    <td>

                    </td>
                    <td><span class="error"><?php echo $errorPass?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td id="buttons"><input type="submit" value="Semd data"></td>
                    <td></td>
                </tr>
            </table>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($errorUser == "" && $errorSubject == "") {
                    echo "<h3>El fomulario ha sido envidao!</h3>";
                }else{
                    echo "<h3 style=\"color: red;\">Error</h3>";
                }
            }
        ?>
    </body>
</html>