<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./register-style.css?v=3" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../../img/gimnasio (1).png" height="100px" />
        </div>
        <div class="title">
            <h1>FitTrack</h1>
        </div>
        <div class="menu">
            <a href="../index.php" sr><img src="../../img/hogar.png"/></a>
        </div>
    </div>
    <hr>
    <div class="body">
        <div class="form">
            <form action="register" method="post">
                <table>
                    <tr>
                        <td><h2>Register</h2></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>Do you have user?&ensp;<a href="../log-in/login.php" class="logIn">Log-In</a></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>Name & Surnames</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="text" size="30" name="name" ></textarea></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>E-mail</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="text" size="30" name="email"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="text" size="30" name="username" ></textarea></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="text" size="30" name="password"></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="submit" value="Register" class="registerButton"></td>
                    </tr>
                </table>
            </form>
        </div>
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