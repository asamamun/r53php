<?php
$db=new mysqli("localhost", "root", NULL, "r53_php");
$createView= "CREATE or replace VIEW products_view AS
SELECT id, name,price
FROM products
WHERE price>5000";
if ($db->query($createView)){
	echo "View creates successfully";	
}else echo "error";
?>

