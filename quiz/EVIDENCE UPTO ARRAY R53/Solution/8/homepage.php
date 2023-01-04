<?php
session_start();
$s = $_SESSION['loggedin']??false;
if($s != true){
    header("location: login.php");
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
<h3>Dash Board</h3>
welcome <?php echo $_SESSION['user']??""; ?>
</body>
</html>