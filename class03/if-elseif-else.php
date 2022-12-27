<?php
$x = isset($_GET['n'])?$_GET['n']:10;

if ($x > 20) {
  echo "x is greater than 20";
} elseif ($x > 15) {
  echo "x is greater than 15 but less than or equal to 20";
} 
 elseif ($x > 10) {
  echo "x is greater than 10 but less than or equal to 15";
} 
else {
  echo "x is less than or equal to 15";
}
