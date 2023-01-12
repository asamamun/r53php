<?php
// var_dump(openssl_get_cipher_methods());
// exit;
if(isset($_POST['k']) && isset($_POST['d'])){
    require "class.php";
    $key = $_POST['k'];
    $message = $_POST['d'];
    $o = new AES($key);
    $result = $o->decrypt($message);
    //echo $result;
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
<a href="index.php">Encrypt Message</a> | <a href="dec.php">Decrypt message</a> <hr>
    <form action="" method="post">
        <input type="text" name="k" placeholder="secret key" required>
        <br>
        <textarea name="d" required></textarea>
        <br>
        <input type="submit" value="Decrypt message with your secret key">
    </form>
    <hr>
    <div>
        <h1>You Original message: </h1>
        <p><?php echo $result??"";?></p>
    </div>
</body>
</html>


