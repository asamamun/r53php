<?php
//parent class
class women{
    const PI = '3.14159265';
public $name;
private $cc;
protected $age=30; 
//to call static fx no need object
public static function hi(){
    return "hello world";
}

function t(){
    women::hi();
}

}
//child class
class BWCT extends women{
    public function getage(){
        return $this->age;
    }
}

$a = new BWCT();
//set
$a->name = "ABC";
//get
echo $a->name;
//set
// $a->age = "30";
//protected properties can only be accessible inside parent and child class
//private properties can only be accessible inside parent class and not the child class
echo "<br>";
echo $a->getage();
echo "<br>";
//you dont need to create object to use class constants
echo women::PI;
//method scope can be: public, private, protected, static, final
//to call static fx no need object, directly call : classname::method()
echo women::hi();

