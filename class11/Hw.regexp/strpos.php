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
        The strpos() function finds the position of the first case-sensitive occurrence of a
        substring in a string.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>
    <?php
    $substr = "index.html";
    $log = <<< logfile
 192.168.1.11:/www/htdocs/index.html:[2010/02/10:20:36:50]
 192.168.1.13:/www/htdocs/about.html:[2010/02/11:04:15:23]
 192.168.1.15:/www/htdocs/index.html:[2010/02/15:17:25]
logfile;
echo strpos($log,"index.html");
// echo strpos($log,"index.html",27);
/*     // What is first occurrence of the time $substr in log?
    $pos = strpos($log, $substr);
    // Find the numerical position of the end of the line
    $pos2 = strpos($log, "\n", $pos);
    // Calculate the beginning of the timestamp
    $pos = $pos + strlen($substr) + 1;
    // Retrieve the timestamp
    $timestamp = substr($log, $pos, $pos2 - $pos);
    echo "The file $substr was first accessed on: $timestamp"; */
    ?>
</body>

</html>