<?php
$secretNumber = 453;
$_POST['guess'] = 442;
if ($_POST['guess'] == $secretNumber) {
echo "<p>Congratulations!</p>";
} elseif ((300 - $secretNumber) < 10) {
echo "<p>You're getting close!</p>";
} else {
echo "<p>Sorry!</p>";
}
?>
<hr>
<?php
$value = 1;
do {
	$count = 3;//3
	$value = $value + 2;//3
	$value = $value * $count;//	9
} while ($count >= 12);
echo "Value =$value";
var_dump($_ENV);
function myfunc(){}
// function($myFunction) { }
// function myFunction($arg1, $arg2);
strlen("abc")
?>

