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
        The strcspn() function returns the length of the first segment of a string containing
        characters not found in another string. The optional start and length parameters behave
        in the same fashion as those used in the previously introduced strspn() function.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>

    <?php
    $password = "12345";
    echo strcspn($password, "1234567890")."<br>";
    if (strcspn($password, "1234567890") == 0) {
        echo "Password cannot consist solely of numbers!";
    }
    ?>

</body>

</html>