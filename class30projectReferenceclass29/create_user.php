<?php
//https://github.com/ThingEngineer/PHP-MySQLi-Database-Class#select-query
require "MysqliDb.php";
$db = new MysqliDb();
$data = [
    'username'=>"user".rand(),
    'password'=>password_hash("12345",PASSWORD_DEFAULT)
];
$db->insert("users",$data);