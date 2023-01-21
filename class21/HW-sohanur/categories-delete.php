<?php
require "db/connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "delete from categories where id='{$id}' limit 1";
    $connect->query($q);
    if($connect->affected_rows){
        header("location: categories.php");
    }
    else{
        die("Error!! Error!!! Error!!!");
        exit;
    }
}