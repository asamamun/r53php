<?php
$a = range("A","Z");
echo key($a) ." : ". current($a)."<br>";
next($a);
next($a);
echo key($a) ." : ". current($a)."<br>";
prev($a);
echo key($a) ." : ". current($a)."<br>";
reset($a);
echo key($a) ." : ". current($a)."<br>";
echo end($a),"<br>";
echo key($a) ." : ". current($a)."<br>";
echo count($a)."<br>";
echo sizeof($a)."<br>";