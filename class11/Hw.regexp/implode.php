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
        Just as you can use the explode() function to divide a delimited string into various array
        elements, you can concatenate array elements to form a single delimited string using the
        implode() function.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>
    <?php
    $cities = array("Columbus", "Akron", "Cleveland", "Cincinnati");
    echo implode("|", $cities);
    ?>


</body>

</html>