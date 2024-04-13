<?php

if (isset($_POST['fontSize'])) {
    $fontSize = $_POST['fontSize'];
    $color = $_POST['color'];

    setcookie("fontsize", $fontSize);
    setcookie("color", $color);
}

header("Location:third.php");
exit();
