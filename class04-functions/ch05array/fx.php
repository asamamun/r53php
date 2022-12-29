<?php
//type hinting
function showdata(array $a){
foreach($a as $key => $val){
    echo "<li>$key : $val</li>";
}
}