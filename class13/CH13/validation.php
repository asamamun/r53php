<h1>email validation</h1>
<?php
// $em = "abc";
$em = "abc@example.com";
if(filter_var($em,FILTER_VALIDATE_EMAIL)){
echo "valid email";
}
else{
    echo "invalid email";
}
?>
<h1>number validation</h1>
<?php
$a = "5";
if(filter_var($a,FILTER_VALIDATE_FLOAT)){
echo "valid number";
}
else{
    echo "invalid number";
}
?>

