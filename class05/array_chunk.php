<?php
$numbers = range(2,10);
$faces = ["j","Q","K","A"];
$cards = array_merge($numbers,$faces);

shuffle($cards);
echo "<hr>";
$chunk = array_chunk($cards,3);
var_dump($chunk);

// echo array_shift($cards);
