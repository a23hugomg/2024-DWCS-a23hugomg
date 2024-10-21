<?php
session_start();
header("Location: /ProjectoPHP/pages/index.php");
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    
    ?>

</body>

</html>