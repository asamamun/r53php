<?php

require "trait.writelog.php";

class A{
    public function write($m){
        $this->writeLog($m);
    }

use Writelog;
}   

class B{
    public function write($m){
        $this->writeLog($m);
    }
use Writelog;
}

$a = new A();
$a->write("testing traits from class A");
$b = new B();
$b->write("testing traits from class B");