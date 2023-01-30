<!DOCTYPE HTML>
<html>
<head>
<title>login form</title>
</head>
<body>
<h2>This is login form</h2>
<form action="#" method="post">
User Name : <input type="text" name="username"><br>
Password : <input type="password" name="password"><br>
<input type="submit" name="submit" id="submit" value="Go !">
</form>    
<?php
if(isset($_POST['submit'])){
$a=$_POST['username'];
$b=$_POST['password'];
//echo $a;
$myconnection= new mysqli("localhost","root","","company");
$myquery="select * from user where username='$a' and password='$b'";
$result=$myconnection->query($myquery);
if($result->num_rows > 0){echo "<h3>you are register user</h3>";}
else {echo "<h3>you are not register user</h3>";}
$result->free();
$myconnection->close();
}
?>
</body>   
</html>