?pass=123 <br>
<?php
$pass = $_GET['pass'];
echo password_hash($pass, PASSWORD_DEFAULT);