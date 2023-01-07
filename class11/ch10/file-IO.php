<?php
$email = "abc@gmail.com";
$pass = password_hash("secret", PASSWORD_DEFAULT);
$line = $email."|".$pass."|\n";
$fh = fopen("file.txt","a");//$file-handler fh is a resource
fwrite($fh, $line);
fclose($fh);
