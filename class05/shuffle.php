<?php
$numbers = range(2,10);
$faces = ["j","Q","K","A"];
$cards = array_merge($numbers,$faces);
print_r($cards);
shuffle($cards);
echo "<hr>";
// print_r($cards);
$int = 1;
while($card = array_shift($cards)){
    if($int == 6) break;
    echo $card . " ";
    $int++;
}
// echo array_shift($cards);
