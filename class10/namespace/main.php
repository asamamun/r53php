<?php
require "A.php";
require "B.php";

use R53PHP\class10\namespace\Image1 as Image1;
use R53PHP\class10\namespace\Image20 as Image2;

$a = new Image1\Image();
$b = new Image2\Image();
/* $a = new \R53PHP\class10\namespace\Image1\Image();
$b = new \R53PHP\class10\namespace\Image20\Image(); */
$a->AA();
$b->AA();
