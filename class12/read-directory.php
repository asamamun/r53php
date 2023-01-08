<?php
 $dh = opendir('D:/xampp8110/htdocs/');
 while ($file = readdir($dh)){
 echo "$file <br />";
 }
 closedir($dh);
?>