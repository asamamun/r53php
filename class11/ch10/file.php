<?php
// var_dump(file("file.txt"));
// var_dump(file("file.txt"));
$lines = file("file.txt");
foreach ($lines as $line) {
    $info = explode("|",$line);
    echo "<h1>User Email : ". $info[0] . "</h1>";
    echo "<h2>Password : ". $info[1] . "</h2> <hr>";
}