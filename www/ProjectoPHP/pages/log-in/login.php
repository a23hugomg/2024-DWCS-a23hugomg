<?php
session_start();
?>
<?php
//Check the user input so that it is safe
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$users = [
    'usuario' => 'abc123',
    'admin' => 'abc123.'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    
    if (isset($users['usuario']) == $username && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: /ProjectoPHP/pages/funcionalidades/funcionalidades.php");
        exit();        
    } else {
        $err = true;
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
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
                        <td><input type="text" size="30" name="username" value="<?php if (isset($username)) echo $username; ?>"></td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr class="espacio"></tr>
                    <tr>
                        <td><input type="password" size="30" name="password"></td>
                    </tr>
                    <tr class=" espacio"></tr>
                    <tr>
                        <td><input type="submit" value="Log in" name="logInButton" class="logInButton   "></td>
                    </tr>
                </table>
            </form>
            <?php if(isset($_GET["redirigido"])){
        echo "<h3>Please introduce login to continue </h3>";
    }?>
    <?php if(isset($err) and $err == true){
        echo "<h3> Please check user or password </h3>";
    }?>
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