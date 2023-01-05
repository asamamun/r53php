<?php
 $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
 //printf("%s <br /> %s", $pat_array[0][0], $pat_array[0][1]);
 var_dump($pat_array);
?>