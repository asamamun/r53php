<?php
require "connection.php";

$q = 'call add_cat("Books","All types of books","books.png")';
$con->query($q);
echo $con->affected_rows;