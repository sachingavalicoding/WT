<?php
session_start();


$correct_username = "user";
$correct_password = "pass";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 1;
    } else {
        $_SESSION['login_attempts']++;
    }


    if ($_SESSION['login_attempts'] <= 3) {

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($username === $correct_username && $password === $correct_password) {

            $_SESSION['logged_in'] = true;
            header("Location: welcome.php");
            exit();
        } else {

            $error_message = "Incorrect username or password. Please try again.";
        }
    } else {

        $error_message = "You have exceeded the maximum number of login attempts.";
    }
}
?>

<html>

<body>
    <?php if (isset($error_message)) : ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username:
        <input type="text" id="username" name="username"><br><br>
        Password:
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>