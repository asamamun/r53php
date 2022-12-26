<?php
// Values to Variables
$a = "A";
$b = $a;//copy
$b = "C";
echo $a;
?>
<hr>
<?php
//value by reference
$x = "5";
$y = &$x;//reference created
$y = "7";
echo $x;
