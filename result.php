<?php
session_start();
?>
<html>

<body>
    <?php
    // set session 
    echo $_SESSION['color'];
    echo $_SESSION['age'];
    ?>
</body>

</html>