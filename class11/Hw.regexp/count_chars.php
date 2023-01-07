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
        The function count_chars() offers information regarding the characters found in a
        string.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>

    <?php
    $sentence = "The rain in Spain falls mainly on the plain";
    $chart = count_chars($sentence, 1);
    foreach ($chart as $letter => $frequency)
        echo "Character " . chr($letter) . " appears $frequency 
times<br />";
    ?>
</body>

</html>