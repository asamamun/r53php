<h1>every php file has access to this classes:</h1>
<?php
 foreach (get_declared_classes() as $key => $value) {
    echo "$value <br>";
 } 
 ?>