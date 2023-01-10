<?php
foreach (getdate() as $key => $value) {
    echo "<strong>$key</strong> :  $value <br>";
} 

?>
<hr>
<?php echo getdate()['year'];?><hr>
<h1>timestamp</h1>
<?php echo getdate()[0];?><hr>
<?php echo time();?><hr>
<?php echo date("U");?><hr>