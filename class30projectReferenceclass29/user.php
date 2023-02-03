<?php
//https://github.com/ThingEngineer/PHP-MySQLi-Database-Class#select-query
require "MysqliDb.php";
$db = new MysqliDb();
$allusers = $db->get("users");
var_dump($allusers);