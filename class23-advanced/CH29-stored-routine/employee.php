<?php
require "database.php";
if(isset($_POST['employeeid'])){
    $selectQ = "select calculate_bonus('".$_POST['employeeid']."') as bonus";
    $selectQResult = $conn->query($selectQ);
    $row = $selectQResult->fetch_assoc();
    //var_dump($row);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
Employee ID:<br>
<input type="text" name="employeeid" size="8" maxlength="8" value="">
<input type="submit" value="View Present Bonus">
</form>
<?php
if(isset($row)){
    echo "<hr>";
    echo "<h1>Bonus:".$row['bonus']."</h1>";
}
?>
</body>
</html>