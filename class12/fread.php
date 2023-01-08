<?php
echo filesize("users.txt");
echo "<br>";
$fh = fopen("users.txt","r");
echo fread($fh,filesize("users.txt"));