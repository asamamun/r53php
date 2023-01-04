<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factrorial</title>
</head>

<body>
    <form action="" method="post">
        Enter a number:<input type="number" name="factorial">
        <input type="submit" value="Get Factrorial">
    </form>
    <?php  
  if(isset($_POST['factorial'])){
  // if($_SERVER['REQUEST_METHOD']=="POST"){
    $n = $_POST['factorial'];
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }
    echo "The factorial of {$n} is:$fact";
  }
    ?>
    

</body>

</html>