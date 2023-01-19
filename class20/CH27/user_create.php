<?php
require "connection.php";
$user = "test".rand(100,999);
$pass = password_hash("12345",PASSWORD_DEFAULT);
$query = "insert into users values(null,'".$user."','".$pass."',current_timestamp())";
// echo $query;
$conn->query($query);
// echo $conn->affected_rows;
if($conn->affected_rows){
    echo "User inserted successfully";
}
else{
    echo "User failed to insert";
}