<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitTrack</title>
    <link rel="stylesheet" type="text/css" href="./log-in-style.css" media="screen" />
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
            <a href="./log-in/login.php">Log-In</a>
            <a href="../register/register.php">Register</a>
        </div>
    </div>
    <hr>
    <div class="body">
        <div class="form">
            <form action="log-in" method="post">
                <table>
                    <td>
                        <tr>Log in</tr>
                    </td>
                    <td>
                        <tr>or <a href="../register/register.php">create an account</a></tr>
                    </td>
                    <td>
                        <tr>Username</tr>
                    </td>
                    <td>
                        <tr><input type="text" name="username"></textarea></tr>
                    </td>
                    <td>
                        <tr>Password</tr>
                    </td>
                    <td>
                        <tr><input type="text" name="password"></tr>
                    </td>
                    <td>
                        <tr>Show password</tr>
                    </td>
                    <td>
                        <tr><input type="submit" value="Sing in"></tr>
                    </td>
                    <td>
                        <tr><a href="">Forgot username?</a></tr>
                    </td>
                    <td>
                        <tr><a href="">Forgot password?</a></tr>
                    </td>
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