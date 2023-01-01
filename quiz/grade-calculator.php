<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="marks" placeholder="marks" required>
        <input type="submit" value="Calculate">
    </form>
    <hr>
    
<?php
if(isset($_POST['marks'])){
    echo '<h1 id="result">';
    $m = $_POST['marks'];
    if($m >= 90) { echo "A+";}
    elseif($m >= 80) { echo "A";}
    elseif($m >= 70) { echo "A-";}
    elseif($m >= 60) { echo "B";}
    elseif($m >= 45) { echo "C";}
    elseif($m >= 33) { echo "D";}
    else echo "F";

        echo '</h1>';
}
?>
    
</body>
</html>