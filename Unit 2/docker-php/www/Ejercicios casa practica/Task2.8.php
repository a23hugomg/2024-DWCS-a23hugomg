<?php

declare(strict_types=1);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = $password = $city = $server = $role = $mail = $payroll = $self = "";
$usernameError = $passwordError = $cityError = $serverError = $roleError = $singError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($_POST["city"])) {
    } else {
        $city = test_input($_POST["city"]);
    }

    if (empty($_POST["server"])) {
    } else {
        $server = test_input($_POST["server"]);
    }

    if (empty($_POST["role"])) {
    } else {
        $role = test_input($_POST["role"]);
    }

    if (empty($_POST["mail"])) {
    } else {
        $mail = test_input($_POST["mail"]);
    }

    if (empty($_POST["payroll"])) {
    } else {
        $payroll = test_input($_POST["payroll"]);
    }

    if (empty($_POST["self"])) {
    } else {
        $self = test_input($_POST["self"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form ||</title>
</head>

<body>
    <h2>Novell Services Login</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" id="username" name="username" value="<?php echo isset($username) ?  $username : ""; ?>"></td>
                <td style="color:red;"><?php echo $usernameError; ?></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" value="<?php echo isset($password) ?  $password : ""; ?>"></td>
                <td style="color:red;"><?php echo $passwordError; ?></td>
            </tr>
            <tr>
                <td><label for="city">City of Employment:</label></td>
                <td><input type="text" id="city" name="city" value="<?php echo isset($city) ?  $city : ""; ?>"></td>
            </tr>
            <tr>
                <td><label for="server">Web server:</label></td>
                <td>
                    <select id="server" name="server">
                        <option value="">-- Choose a server --</option>
                        <option value="server1" <?php if (isset($server) && $server == "server1") echo "selected"; ?>>Server 1</option>
                        <option value="server2" <?php if (isset($server) && $server == "server2") echo "selected"; ?>>Server 2</option>
                        <option value="server3" <?php if (isset($server) && $server == "server3") echo "selected"; ?>>Server 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Please specify your role:</td>
                <td>
                    <label><input type="radio" name="role" <?php if (isset($role) && $role == "admin") echo "checked"; ?> value="admin"> Admin</label><br>
                    <label><input type="radio" name="role" <?php if (isset($role) && $role == "engineer") echo "checked"; ?>value="engineer"> Engineer</label><br>
                    <label><input type="radio" name="role" <?php if (isset($role) && $role == "manager") echo "checked"; ?>value="manager"> Manager</label><br>
                    <label><input type="radio" name="role" <?php if (isset($role) && $role == "guest") echo "checked"; ?> value="guest"> Guest</label>
                </td>
            </tr>
            <tr>
                <td>Single Sign-on to the following:</td>
                <td>
                    <label><input type="checkbox" name="mail" <?php if (isset($mail) && $mail == "mail") echo "checked"; ?> value="mail"> Mail</label><br>
                    <label><input type="checkbox" name="payroll" <?php if (isset($payroll) && $payroll == "payroll") echo "checked"; ?> value="payroll"> Payroll</label><br>
                    <label><input type="checkbox" name="self" <?php if (isset($role) && $role == "self") echo "checked"; ?> value="self"> Self-service</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" class="button-group">
                    <button type="submit">Login</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
    <?php
    echo $role;
    echo $self;
    ?>
</body>

</html>