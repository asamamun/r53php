<?php
    session_start();
    if (isset($_POST['login'])) {
        $uname = $_POST['username'];
        $pass = $_POST['pass'];
        if ($uname == "IDB" && $pass == "secret") {
            $_SESSION['user'] = $uname;
            $_SESSION['loggedin'] = true;
            header("location: homepage.php");
        } else {
            $message = "Login Failed";
            $_SESSION['loggedin'] = false;
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $message ?? " "; ?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Username</label>
        <input type="text" name="username" required>
        <br><br>
        <label for="">Password</label>
        <input type="password" name="pass" required>
        <br><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>