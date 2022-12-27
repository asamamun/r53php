<?php
//page87.php?n=sports
 switch($_GET['n']) {
 case "news":
 echo "What's happening around the world";
 break;
 case "weather":
 echo "Your weekly forecast";
 break;
 case "sports":
 echo "Latest sports highlights";
 echo "From your favorite teams";
 break;
 default:
 echo "Welcome to my web site";
 }
?>