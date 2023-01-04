<?php
class A{}
class B{}
$x = new A();
$y = new B();
if(is_a($y,"B")){
    echo "yes";
}
else{ echo "no"; }

if(method_exists($x,"hi")){
    echo "has";
}
else{ echo "no has";}