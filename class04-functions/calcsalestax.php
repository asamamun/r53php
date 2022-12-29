<?php
function calculateSalesTax($price, $tax)
{
 return $price + ($price * $tax);
}

$pricetag = 15.00;
 $salestax = .0675;
 $total = calculateSalesTax($pricetag, $salestax);
 echo $total;
 ?>