<?php
if(isset($_POST['sub'])){
	$name = $_POST['uname'];
	$email = $_POST['uemail'];
	$namelength = strlen($name);
	if($namelength < 4 || $namelength >8){
		echo "invalid username. should be between 4 to 8 char!!";
		}
	else echo "valid username.<br>";	
	}
	$ppattern = "/\S+@\S+\.\S+/";
	if(preg_match($ppattern , $email)){echo "valid email";}
	else {echo "invalid email";}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>email</title>
</head>

<body>
<form method="post">
User name: <input type="text" name="uname" required><br>
Email: <input type="email" name="uemail" required><br>
<input type="submit" name="sub">
</form>
</body>
</html>