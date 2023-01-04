<?php
$n;
function add(){
STATIC $n=5; 
$n = $n + 5;
 echo $n;
}
add(); add(); 

