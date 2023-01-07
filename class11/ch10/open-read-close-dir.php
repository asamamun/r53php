<?php
$url = "D:/xampp8110/htdocs/Round53/css3/";
$fh = opendir($url);
// echo readdir($fh) . "<br>";
// echo readdir($fh) . "<br>";
// echo readdir($fh) . "<br>";
// echo readdir($fh) . "<br>";
while($f = readdir($fh)){
    if($f != '.' && $f != '..'){
        if(is_file($url.$f)){
            echo "File : " . $f . "<br>";
        }
        if(is_dir($url.$f)){
            echo "Folder : " . $f . "<br>";
        }
    }
    
}
closedir($fh);