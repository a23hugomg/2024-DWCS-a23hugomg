<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./log-in-style.css?v=1" media="screen" />
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
            <a href="../index.php">Home</a>
            <a href="./login.php">Log-In</a>
            <a href="../register/register.php">Register</a>
        </div>
    </div>
    <hr>
    <div class="body">
        <div class="form">
            <form action="log-in" method="post">
                <table>
                    <tr>
                        <td><h2>Log in</h2></td>
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
                        <td><input type="text" size="30" name="username" ></textarea></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="text" size="30" name="password></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="submit" value="Log in" class="logInButton"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <footer>
        <div class="box">
            <p>Footer</p>
        </div>
    </footer>
</body>

</html>