<?php
 $a = 5;
 $tsp = "genuity";
echo "$a _abc<br>"; 
//there is no variable $a_abc this will not show the value of $a
echo "{$a}_abc<br>"; 
//Now $a is isolated as a variable and the output  will be as expected.
echo $a."_abc<br>";
?>
<h1>printf</h1>
<?php
printf("%d<br>",$a);
printf("%f<br>",$a);
printf("%.2f<br>",$a);
printf("%s<br>",$a);
printf("%s<br>",$tsp);
printf("%d<br>",$tsp);
printf("<br>%d bottles of tonic water cost $%f.", 100, 43.20);
printf("<br>%d bottles of tonic water cost $%.2f.", 100, 43.20);
?>
<hr>
<?php
$result = false;
echo $result?1:0;
echo "<br>";
printf("%d",$result);
echo "<hr>";
$a = sprintf("%d",$result);
echo $a;