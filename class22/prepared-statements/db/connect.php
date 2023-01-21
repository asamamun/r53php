<?php
ini_set("display_errors",1); 
try {
    $connect = new mysqli('localhost','root',null,'r53_php');
    // Check connection
   if ($connect->connect_errno) {
    throw new Exception("Connection failed: " . $connect->connect_errno);
   }
   
   $connect->set_charset('utf8');
} catch (Exception $e) {    
    echo "Failed to connect to MySQL: " . $e->getMessage();
}