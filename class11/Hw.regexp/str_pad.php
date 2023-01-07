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
        The str_pad() function pads a string with a specified number of characters.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>
    <?php
    echo str_pad("Salad", 10) . " is good.";
    ?>
    <hr>
    <?php
    $n = "99999";
    echo str_pad($n,5,"0",STR_PAD_LEFT);
    ?>
</body>

</html>