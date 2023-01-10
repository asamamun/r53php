<?php
$hash = '$2y$10$O7Hcpowwzd1VKg9hI9pgHOmlmgP57ipOeEZ2MEC4JVP2yAgJPdBci';
if(password_verify("ismail123",$hash)){
    echo "matched";
}
else{
    echo "unmatched";
}
