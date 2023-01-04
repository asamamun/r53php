<?php
class A{
    public function __construct(){
        echo "1";
    }
    function a(){
        echo "i am from class a, method a<br>";
    }
    final function b(){
        echo "i am from class a, method b<br>";
    }
}

class C extends A{
    public function __construct(){
        echo "2";
        parent::__construct();
       
    }
    function a(){
        echo "i am from class c, method a<br>";
    }
    // function b(){
    //     echo "i am from class c, method b<br>";
    // }
    function __destruct()
    {
        // unset()
        echo "<br>i am called when object destroyes";
    }
}

$o = new C();
$o->a();
$o->b();

//garbage collection: a garbage collection is automated process where machines recapture memory
echo "hi";