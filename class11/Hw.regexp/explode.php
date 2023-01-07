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
        The explode() function divides the string str into an array of substrings.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>
    <?php
    $summary = <<<summary
 The most up to date source for PHP documentation is the PHP manual.
 It contins many examples and user contributed code and comments.
 It is available on the main PHP web site
 <a href="http://www.php.net">PHP’s</a>.
summary;
echo $summary . "<hr>";
    $words = sizeof(explode(' ', strip_tags($summary)));
    echo "Total words in summary: $words";
    ?>
</body>

</html>