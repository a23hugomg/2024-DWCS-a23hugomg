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
        <h2>Novell Services Login</h2>
        <?php
        $username = $password = $city = $server = $role = $singOn1 = $singOn2 = $singOn3 = "";
        $errorUser = $errorPass = $errorCity = $errorServer = $errorRole = $errorSing = "";
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

            if (empty($_POST["ciudad"]) || $_POST["ciudad"] == "") {
                $errorCity = "*La ciudad no puede estar vacia";
            }else{
                $city = test_input($_POST["ciudad"]);
            }

            if (empty($_POST["webserver"])) {
                $errorServer = "*El servido es incorrecto";
            }else{
                $server = $_POST["webserver"];
            }

            if (empty($_POST["role"]) || $_POST["role"] == "") {
                $errorRole = "*El role no puede estar vacio";
            }else{
                $role = test_input($_POST["role"]);
            }

            if (empty($_POST["singOn1"])) {
            }else{
                $singOn1 = test_input($_POST["singOn1"]);
            }

            if (empty($_POST["singOn2"])) {
            }else{
                $singOn2 = test_input($_POST["singOn2"]);
            }

            if (empty($_POST["singOn3"])) {
            }else{
                $singOn3 = test_input($_POST["singOn3"]);
            }

            if (empty($_POST["singOn1"]) && empty($_POST["singOn2"]) && empty($_POST["singOn3"])) {
                $errorSing = "*Debes seleccionar al menos un sing";
            }
        }
        ?>

        <form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table>
                <tr aria-colspan="2">
                    <td>Username:</td>
                    <td><input type="text" name="nombre" value="<?php echo $username?>"></td>
                    <td><span class="error"><?php echo $errorUser?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="contraseña" value="<?php echo $password?>"></td>
                    <td><span class="error"><?php echo $errorPass?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td>City of Employment:</td>
                    <td><input type="text" name="ciudad" value="<?php echo $city?>"></td>
                    <td><span class="error"><?php echo $errorCity?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td>Web server:</td>
                    <td><select name="webserver">
                            <option value="">--Choose a server--</option>
                            <option value="1" <?php if (isset($server) && $server=="1") echo "selected";?>>Server 1</option>
                            <option value="2" <?php if (isset($server) && $server=="2") echo "selected";?>>Server 2</option>
                        </select>
                    </td>
                    <td><span class="error"><?php echo $errorServer?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td>Please specify your role:</td>
                    <td>
                        <input type="radio" name="role" <?php if (isset($role) && $role=="Admin") echo "checked";?> value="Admin">Admin</input>
                        <br>
                        <input type="radio" name="role" <?php if (isset($role) && $role=="Engineer") echo "checked";?> value="Engineer">Engineer</input>
                        <br>
                        <input type="radio" name="role" <?php if (isset($role) && $role=="Manager") echo "checked";?> value="Manager">Manager</input>
                        <br>
                        <input type="radio" name="role" <?php if (isset($role) && $role=="Guest") echo "checked";?> value="Guest">Guest</input>
                    </td>
                    <td><span class="error"><?php echo $errorRole?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td>Single Sign-on to the following:</td>
                    <td>
                        <input type="checkbox" name="singOn1" <?php if (isset($singOn1) && $singOn1=="Mail") echo "checked";?> value="Mail" >Mail
                        <br>
                        <input type="checkbox" name="singOn2" <?php if (isset($singOn2) && $singOn2=="Playroll") echo "checked";?> value="Playroll" >Playroll
                        <br>
                        <input type="checkbox" name="singOn3" <?php if (isset($singOn3) && $singOn3=="Self-service") echo "checked";?> value="Self-service" >Self-service
                    </td>
                    <td><span class="error"><?php echo $errorSing?></span></td>
                </tr>
                <tr class="espacio"></tr>
                <tr>
                    <td></td>
                    <td id="buttons">
                        <input type="submit" value="Login">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($errorUser == "" && $errorPass == "" && $errorCity == "" && $errorServer == "" && $errorRole == "" && $errorSing == "") {
                    echo "<h3>El fomulario ha sido envidao!</h3>";
                }else{
                    echo "<h3 style=\"color: red;\">Error</h3>";
                }
            }
        ?>
    </body>
</html>