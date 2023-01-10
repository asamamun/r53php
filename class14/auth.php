<?php
if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_PW'])) {
 header('WWW-Authenticate: Basic');
 header("HTTP/1.1 401 Unauthorized");
 print('You must provide the proper credentials!');
 exit;
}
else{
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    //echo "You have given $user and $pass";
    if($user == "admin" && $pass == "secret"){
echo "you are valid user";
    }
    else{
        header('WWW-Authenticate: Basic');
        header("HTTP/1.1 401 Unauthorized"); 
        print('You must provide the proper credentials!');
 exit; 
    }
}
?>