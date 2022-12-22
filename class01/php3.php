<?php
//function
function hi($n){
    //echo 'Hello $n';//variable can be parsed/read only in double quotes
    echo "<br>Hello $n";//variable can be parsed/read only in double quotes
}
// hi("IDB");
hi($_GET['name']);

// $_GET['name']
//?money.price.minimum=20000&money.price.maximum=30000&tree.brand=lenovo_lenovo-t-series
?>
<hr>
<a href="php3_1.php?n=Bangladesh&price=5000&cat=men" target="_blank">link1</a> |
<a href="php3_1.php?n=USA&price=9000&cat=women" target="_blank">link2</a> |
<a href="php3_1.php?n=KSA&price=88000&cat=automobile" target="_blank">link3</a> | 