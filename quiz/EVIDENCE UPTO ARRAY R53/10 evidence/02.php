<?php
if(isset($_POST['calc'])){
    $fNumber = $_POST['firstNumber'];
    $sNumber = $_POST['secondNumber'];
    $tNumber = $_POST['thirdNumber'];

    if($fNumber >= $sNumber && $fNumber >= $tNumber){
        $maxVal = $fNumber;
    }
    elseif($sNumber >= $fNumber && $sNumber >= $tNumber){
        $maxVal = $sNumber;
    }
    else{
        $maxVal = $tNumber;
    }

    if($fNumber <= $sNumber && $fNumber <= $tNumber){
        $minVal = $fNumber;
    }
    elseif($sNumber <= $fNumber && $sNumber <= $tNumber){
        $minVal = $sNumber;
    }
    else{
        $minVal = $tNumber;
    }

    echo "<h2>Maximum value = " . $maxVal . "<br></h2>";
    echo "<h2>Minimum value = " . $minVal . "</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <label for="">Ener First Number</label><br>
        <input type="text" name="firstNumber"><br>

        <label for="">Ener Second Number</label><br>
        <input type="text" name="secondNumber"><br>

        <label for="">Ener Third Number</label><br>
        <input type="text" name="thirdNumber"><br>

        <input type="submit" name="calc">
    </form>
    </div>
</body>
</html>