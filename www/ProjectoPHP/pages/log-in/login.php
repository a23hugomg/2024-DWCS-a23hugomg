<?php
//Check the user input so that it is safe
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function comprobarUsuario($username, $password)
{
    if ($username === "usuario" and $password === "abc123") {
        $usu['username'] = "usuario";
        $usu['rol'] = 0;
        return $usu;
    } elseif ($username === "admin" and $password === "abc123.") {
        $usu['username'] = "admin";
        $usu['rol'] = 1;
        return $usu;
    } else return false;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = test_input($_POST['usuario']);
    $password = test_input($_POST['password']);
    $usu = comprobarUsuario($usuario, $password);
    if ($usu == false) {
        $err = true;
        $usuario = $_POST['usuario'];
    } else {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: ../funcionalidades/funcionalidades.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./log-in-style.css?v=3" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php if (isset($_GET["redirigido"])) {
        echo "<p>Please introduce login to continue </p>";
    } ?>
    <?php if (isset($err) and $err == true) {
        echo "<p> Please check user and password </p>";
    } ?>
    <div class="header">
        <div class="logo">
            <img src="../../img/gimnasio (1).png" height="100px" />
        </div>
        <div class="title">
            <h1>FitTrack</h1>
        </div>
        <div class="menu">
            <a href="../index.php" sr><img src="../../img/hogar.png" /></a>
        </div>
    </div>
    <hr>
    <div class="body">
        <div class="form">
            <form action="../funcionalidades/funcionalidades.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <h2>Log in</h2>
                        </td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>or <a href="../register/register.php" class="createAccount">create an account</a></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>Username</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="text" size="30" name="username" value="<?php if (isset($usuario)) echo $usuario; ?>"></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="text" size="30" name="password"></td>
                    </tr>
                    <tr class=" espacio">
                    </tr>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Log in" name="logInButton"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <footer>
        <div class="box">
            <p>Contacto: +34 658 31 58 15 </p>
            <p>Siguenos en nuestras redes:
                <a href="https://www.instagram.com/?hl=es">Instagram</a>
                <a href="https://www.facebook.com/?locale=es_ES">Facebook</a>
            </p>
        </div>
    </footer>
</body>

</html>