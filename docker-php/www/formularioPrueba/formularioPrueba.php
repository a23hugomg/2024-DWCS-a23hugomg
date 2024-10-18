<html>
<body>

    <?php
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        // define variables and set to empty values
        $name = $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);

            echo "Welcome $name<br>";
            echo "Your email address is:  $email";  
        }else {
    ?>
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>
    <?php } ?>


</body>
</html>