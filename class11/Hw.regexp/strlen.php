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
        Determining string length is a repeated action within countless applications. The PHP
        function strlen() accomplishes this task quite nicely. This function returns the length
        of a string, where each character in the string is equivalent to one unit (byte).
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>


</body>

</html>
<?php
$pswd = "secretpswd";
echo strlen($pswd);
echo "<br>";
if (strlen($pswd) < 10)
    echo "Password is too short!";
else
    echo "Password is valid!";
?>