<?php
echo mktime(1,12,12,2,6,1997);
?>
<hr>
<?php
echo time();
?>
<h3>Age of Ismail</h3>
<?php
echo (time()-mktime(1,12,12,1,6,1997))/(60*60*24*365);
?>