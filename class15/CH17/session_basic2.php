<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_SESSION['valid'] ?>
    <a href="session-basic.php">1</a>
    <ul>
        <li>session_start()</li>
        <li>$_SESSION['variablename'] = value;</li>
        <li>session_unset()</li>
        <li>session_destroy()</li>
    </ul>
</body>
</html>