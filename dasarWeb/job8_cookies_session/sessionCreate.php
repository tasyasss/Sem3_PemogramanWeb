<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<body>

    <?php 
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo"Session variable are set.";
    ?>
    
</body>
</html>