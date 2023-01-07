<?php
$fh = fopen("file.txt","r");
while(!feof($fh)){
    echo fgets($fh) . "<br>";
}
fclose($fh);