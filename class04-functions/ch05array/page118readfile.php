<?php
// Open the users.txt file
$users = file("users.txt");
// print_r($users);
foreach ( $users as $user){
    list($n,$p,$c)= explode("|", $user); //['Nino Sanzi','professional golfer','green']
    echo "<span style='color:$c'>$n</span><br>";   
}
