<?php
if(isset($_POST['Grade'])){
	$g = strtoupper($_POST['ug']);
	//$mess = "none";
	if($g == "A"){$mess = "Excellent";}
	else if($g == "B"){$mess = "Good";}
	else if($g == "C"){$mess = "Fair";}
	else if($g == "D"){$mess = "Poor";}
	else {$mess = "Fail";}	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post">
User Grade:<input type="text" name="ug">
<br>
<input type="submit" name="Grade" value="grade?">
</form>
<h1><?php if(isset($mess)) echo $mess;   ?></h1>
</body>
</html>