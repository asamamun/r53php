<?php
$a = range("A","Z");
// echo array_rand($a,1);//returns key
$letters = array_rand($a,6);//returns key
foreach ($letters as $value) {
    echo $a[$value];
}
