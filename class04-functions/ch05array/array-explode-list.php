<?php
$line = "Nino Sanzi|professional golfer|red";
 list($n,$p,$c)= explode("|", $line); //['Nino Sanzi','professional golfer','green']
 echo "<span style='color:$c'>$n</span>";