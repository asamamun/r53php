<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factrorial</title>
</head>
<body>
    <form action="isprime.php" method="post">
        <input type="text" name="prime">
        <input type="submit" value="Check ">
    </form>
    
</body>
</html>

<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    function isPrime($num) {
             
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i === 0) { return false; }
        }
        return $num > 1;

    }
    $p=$_POST['prime'];
    if (isPrime($p)){
        echo($p." "."is a prime Number");
    }
    else{
        echo($p." "."is  Not a prime Number");
    }
}
        
  ?>