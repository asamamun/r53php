<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        The strcmp() function performs a case-sensitive comparison of two strings.Websites often require a registering user to enter and then confirm a password,
        lessening the possibility of an incorrectly entered password as a result of a typing error.
        strcmp() is a great function for comparing the two password entries because passwords
        are usually treated in a case-sensitive fashion
    </p>

    <h4 style="color: red;">
        EXAMPLE:
    </h4>

</body>
<?php
 $pswd = "supersecret";
 $pswd2 = "supersecret2";
//  if (strcmp($pswd, $pswd2) != 0) {
 if ($pswd != $pswd2) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
?>

</html>