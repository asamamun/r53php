<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sort</title>
</head>

<body>
<?php
$arr = array("india"=>"delli","bangladesh"=>"dhaka","usa"=>"washington","nepal"=>"kathmundu");
ksort($arr);
foreach($arr as $k=>$v){
	echo $v."<br>";
	}

?>
</body>
</html>