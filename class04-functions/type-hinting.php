<?php
function sq(int $n):string{
    return "$n x $n = " . $n*$n;
}
echo sq(5);
// echo sq("A");