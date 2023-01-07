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
        The strspn() function returns the length of the first segment in a string containing
        characters also found in another string.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>

    <?php
    $password = "3312345";
    echo strspn($password, "1234567890"). "<br>";
    if (strspn($password, "1234567890") == strlen($password))
        echo "The password cannot consist solely of numbers!";
    ?>

</body>

</html>