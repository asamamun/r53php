<?php
require "connection.php";
if(isset($_POST['employeeid'])){
    $eid = $_POST['employeeid'];
    $selectQ = "select sum(`revenue`) as totalsale,calculate_bonus('".$eid."') as bonus from sales where `empid` ='$eid'";
    // echo $selectQ;
    $selectQResult = $con->query($selectQ);
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
<!-- <input type="text" name="employeeid" size="8" maxlength="8" value=""> -->
<select name="employeeid">
    <option value='-1'>Select Employee</option>
<?php
//SELECT distinct(`empid`) as id FROM `sales` WHERE 1
$selectQuery = "SELECT distinct(`empid`) as id FROM `sales` WHERE 1";
$selectQueryResult = $con->query($selectQuery);
if($selectQueryResult->num_rows > 0){
    while($row1 = $selectQueryResult->fetch_assoc()){
        echo "<option value='".$row1['id']."'>".$row1['id']."</option>";
    }
}
?>
</select>
<input type="submit" value="View Present Bonus">
</form>
<?php
if(isset($row)){
    echo "<hr>";
    echo "<h1>Total Sales:".$row['totalsale']."</h1>";
    echo "<h1>Bonus:".$row['bonus']."</h1>";
}
?>
</body>
</html>