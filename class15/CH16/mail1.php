<a href="https://isdbstudents.com/49/php/mail.php">test mail link</a>
<?php
$sub = "Test mail from SIR ".time(); 
if(mail("mamuncitiut@gmail.com",$sub,"Testing mail function in php","From:test@isdbstudents.com\r\n")) echo "SENT!!";
else echo "ERROR!!!";
?>