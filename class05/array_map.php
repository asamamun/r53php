<?php
function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
$newarr = array_map("myfunction",$a);
// var_dump($newarr)
foreach ($newarr as $value) {
    echo $value . " ";
}
?>
<hr>
<?php
$marks = [22,66,99,77,66,76,89,100];
function markwithgrade($value){
    if($value>90){ return $value."(A+)"; }
    elseif($value>70){ return $value."(A)";}
    elseif($value>60){ return $value."(B)";}
    elseif($value>45){ return $value."(C)";}
    elseif($value>33){ return $value."(D)";}
    else { return $value."(F)";}
}
$newreault = array_map("markwithgrade", $marks);
foreach ($newreault as $value) {
    echo $value . " ";
}