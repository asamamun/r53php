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
        The function str_word_count() offers information regarding the total number of words
        found in a string. Words are defined as a string of alphabetical characters, depending on
        the local setting, and may contain but not start with – and ’.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>
    <?php
    $summary = <<< summary
 The most up to date source for PHP documentation is the PHP manual.
 It contins many examples and user contributed code and comments.
 It is available on the main PHP web site
 <a href="http://www.php.net">PHP's</a>.
summary;
    $words = str_word_count($summary);
    printf("Total words in summary: %s", $words);
    ?>
</body>

</html>