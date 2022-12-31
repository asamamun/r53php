<?php
require "products.php";
/* $array = range(1,100);
function odd($v){
    return $v%2;
}
$odd_num = array_filter($array,"odd");
echo "<pre>";
var_dump($odd_num);
echo "</pre>"; */


function gt20($p){
    return $p['price']>=20;
}
$productsgt20 = array_filter($products,"gt20");
var_dump($productsgt20);