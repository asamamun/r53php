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
        You may sometimes need to convert an HTML file to plain text. You can do so using the
        strip_tags() function, which removes all HTML and PHP tags from a string, leaving
        only the text entities.
    </p>

    <h4 style="color: red;">
        EXAMPLE:
    </h4>

    <?php
    $input = "This <a href='http://www.example.com/'>example</a>
 is <b>awesome</b><script>window.open('')</script>!";
    echo strip_tags($input, "<a><b>");
    // echo $input;
    ?>

</body>

</html>