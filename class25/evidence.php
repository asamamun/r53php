<?php
$conn = new mysqli("localhost","root","","r53_php");
$q = "create or replace view gt5k as select * from products where price > 5000";
$conn->query($q);
echo "View Created";
//generate CRUD of products table
$sq = "select * from gt5k";
//show data in table