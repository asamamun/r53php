<form method="post">
    <label>Enter number</label>
    <input type="number" name="x">
    <input type="submit" value="Submit">
</form>
<?php
if(isset($_POST['x'])){
$me = $_POST['x'];
$you = "Prime Number";
for ($i=2; $i < $me; $i++) { 
    if ($me % $i == 0) {
        $you=  "Not Prime Number";
        break;
    }
}
echo $you;
}

?>


