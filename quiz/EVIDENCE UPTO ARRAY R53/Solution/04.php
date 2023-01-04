<form action="" method="post">
    <label for="">Enter your grade value(A+,A,B,C,F)</label><br>
    <input type="text" name="value"><br>
    <input type="submit" name="calc">

</form>

<?php
function xyz($z){
    $z = strtoupper($z);    
    if($z == "A+"){return "Outstanding";}
    elseif($z == "A"){return "Very Good";}
    elseif($z == "B"){return "Good";}
    elseif($z == "C"){return "Poor";}
    else{ return "Fail";}
}
if(isset($_POST['calc'])){

    $abc = $_POST['value'];
    $result = xyz($abc);
    echo "<b>Result:</b> " . $result;
}
?>