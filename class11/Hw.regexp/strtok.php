<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
            Tokenizing is a computer term for splitting a string into smaller parts. This is used
            by compilers to convert a program to individual commands or tokens. The strtok()
            function tokenizes the string based on a predefined list of characters.
        </p>
        <h4 style="color: red;">
            EXAMPLE:
        </h4>
        <?php
        $info = "J. Gilmore:jason@example.com|Columbus, Ohio";
        // delimiters include colon (:), vertical bar (|), and comma (,)
        $tokens = ":|,";
        $tokenized = strtok($info, $tokens);
        // echo $tokenized; 
        // echo strtok($tokens); 
        // echo strtok($tokens); 
        // echo strtok($tokens); 
        // echo strtok($tokens); 
        // print out each element in the $tokenized array
        while ($tokenized) {
            echo "Element = $tokenized<br>";
            // Don't include the first argument in subsequent calls.
            $tokenized = strtok($tokens);
        }
        ?>
    </body>

    </html>
</body>

</html>