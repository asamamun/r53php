<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
if(isset($_GET['calc'])){
    $n = $_GET['n'];
    echo "Your value:  " . $n;
};
    ?>
    <form action="">
        <input type="number" name="n" placeholder="insert number">
        <input type="submit" name="calc" value="Calculate">
    </form>
</body>
</html>