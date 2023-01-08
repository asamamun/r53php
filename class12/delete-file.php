<?php
for ($i=1; $i <= 50 ; $i++) {
    if(is_file($i.".txt"))
    unlink($i.".txt");
    if(is_dir($i)) 
    rmdir($i);   
}