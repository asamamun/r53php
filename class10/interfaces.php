<h3>
An interface defines a general specification for implementing a particular service, 
declaring the required functions and constants without specifying exactly how it must be 
implemented.
</h3>
<?php
//interface
interface IBrazil{
    function play();
    function cheer();
    function hire();
}
//implements interface
class A implements IBrazil {
function play(){}
function cheer(){}
function hire(){}
}
$a = new A();


