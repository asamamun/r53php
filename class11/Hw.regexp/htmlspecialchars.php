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
        Several characters play a dual role in both markup languages and the human language.
        When used in the latter fashion, these characters must be converted into their
        displayable equivalents. For example, an ampersand must be converted to & whereas a
        greater-than character must be converted to >. The htmlspecialchars() function can
        do this
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>

    <?php
    $input = "I just can't &get <<enough>> of PHP!";
    echo $input;
    echo "<br>";
    echo htmlspecialchars($input);
    ?>
</body>

</html>