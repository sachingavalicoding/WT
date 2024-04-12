<?php
session_start();
?>
<html>

<body>
    <h1> Hello </h1>
    <?php
    // set session 
    $_SESSION['color'] = "blue";
    $_SESSION['age'] = 19;
    ?>
</body>

</html>