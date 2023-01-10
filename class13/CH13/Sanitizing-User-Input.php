<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sanitizing User Input</h1>
    <p>
    Four standard functions are available for doing so: escapeshellarg(), 
escapeshellcmd(), htmlentities(), and strip_tags().
    </p>
    <?php
    echo escapeshellarg("/usr/bin/inventory_manager '50XCH67YU' '50; rm -rf *'");
    ?>
    <hr>
    <?php
    echo escapeshellcmd("/usr/bin/inventory_manager '50XCH67YU' '50; rm -rf *'");
    ?>
</body>
</html>