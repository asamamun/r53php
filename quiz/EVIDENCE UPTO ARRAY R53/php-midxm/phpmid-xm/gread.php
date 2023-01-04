<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factrorial</title>
</head>
<body>
    <form action="gread.php" method="post">
        <input type="text" name="grade">
        <input type="submit" value="Check ">
    </form>
    
</body>
</html>
<?php
  if(isset($_POST['grade'])){
// if($_SERVER['REQUEST_METHOD']=="POST"){

$num=$_POST['grade'];
if($num>=80){
    echo "You acheived Grade : A+";
}
elseif($num>=70){
    echo "You acheived Grade : A";
}
elseif($num>=60){
    echo "You acheived Grade : A-";
}
elseif($num>=50){
    echo "You acheived Grade : B";
}
elseif($num>=40){
    echo "You acheived Grade : C";
}
elseif($num>=33){
    echo "You acheived Grade : D";
}
else{
    echo "You are failed!";
}
}
?>