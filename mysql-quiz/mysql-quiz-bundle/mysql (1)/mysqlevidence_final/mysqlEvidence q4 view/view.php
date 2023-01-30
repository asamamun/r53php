<?php
$db=new mysqli("localhost", "root", NULL, "company");
$createView= "CREATE VIEW products_view AS
SELECT id, Name,price, manufacturer_id
FROM product
WHERE price>5000";
if ($db->query($createView)){
	echo "View creates successfully";	
}else echo "error";
