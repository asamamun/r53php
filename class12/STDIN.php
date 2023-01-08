<?php
echo 'Are you sure you want to delete? (y/n) ';
$input = fgetc(STDIN);
if (strtoupper($input) == 'Y')
{
 unlink('users.txt');
}
?>