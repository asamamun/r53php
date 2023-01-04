<form method="post">
    <label for="">Enter number</label>
    <input type="number" name="x">
    <input type="submit" value="Submit">
</form>

<?php

if(isset($_POST['x'])){
    $me = $_POST['x'];
    $you = 1;
    for ($me; $me > 1 ; $me--) { 
        $you = $you * $me;
    }
    echo $you;
}

?>

