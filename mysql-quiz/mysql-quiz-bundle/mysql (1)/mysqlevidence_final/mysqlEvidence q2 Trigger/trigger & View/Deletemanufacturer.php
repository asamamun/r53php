<?php
$deleteId=$_GET['deleteid'];
if($deleteId){
$db=new mysqli("localhost", "root", NULL, "company");
$myShowQuery="delete from manufacturer where id='$deleteId';";
$db->query($myShowQuery);
$db->close();
echo "manufacturer with id: $deleteId deleted";}
?>
<html>
<head>
<title>Manufacturer</title></head>
<body>
<h2>Manufacturer Table</h2>
	<form action="#" method="get">
		<table>
               <tr><td>Manufacturer</td><td>:</td>
               <td>
               <?php 
               $db=new mysqli("localhost", "root", NULL, "company");
               $myShowQuerry="select * from manufacturer;";               
               $result = $db->query($myShowQuerry);
               echo "<select name='deleteid'>";
               while (list($id,$name)=$result->fetch_row()){               
               	echo "<option value=" .$id.">".$name."</option>";}               
               echo "</select>";               
               $result->free;
               $db->close();                             
               ?>
               </td></tr>			   
			   <tr><td></td><td></td>
               <td>
               <input type="submit" name="delete"  id="btnDelete" value="delete" />
               </td></tr></table></form></body></html>
 

  