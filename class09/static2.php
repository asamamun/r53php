<?php
class Cart{
    public static $total = 0;
    public function __construct($amount){
        Self::$total += $amount + $amount*0.05;
    }
}

new Cart(100);
new Cart(200);
new Cart(10);
echo Cart::$total;