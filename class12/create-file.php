<?php
for ($i=1; $i <= 50 ; $i++) { 
    $fh = fopen($i.".txt","w");
    fclose($fh);
    mkdir($i);
}

