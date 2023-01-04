<?php
class Employee {
 private $name;
 //will call automatically when object is cloned
 function __clone() {
    echo "i am called<br>";
   }
 function setName($name) {
 $this->name = $name;
 }
 function getName() {
 return $this->name;
 }
}
$emp1 = new Employee();
$emp1->setName('John Smith');
$emp2 = clone $emp1;
$emp2->setName('Jane Smith 2');
echo "Employee 1 = {$emp1->getName()}\n<br>";
echo "Employee 2 = {$emp2->getName()}\n<br>";
?>