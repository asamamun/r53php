<?php
	if(isset($_GET["name"])){
	$db = new mysqli("localhost", "root", NULL, "company");
	$name=$_GET["name"];
	$address=$_GET["address"];
	$tel=$_GET["contact"];
	$queryString="call manufact('$name','$address','$tel');";	
	$myQuerry="call manufact($name,$address,$tel)";	
	$result = $db->query($queryString);
	if($result){echo "Data Added!!";}
	else echo "Error!!!";
	$result->free;
	$db->close();
	}
?>
 <form action="#" method="get">    
<table style="width: 100%; border: 1px solid red" >
<tr><td>id</td><td>:</td><td><input type="text" name="id" id="id" readonly="readonly"/></td></tr>
<tr><td>name</td><td>:</td><td><input type="text" name="name" id="name"/></td></tr>
<tr><td>address</td><td>:</td><td><input type="text" name="address" id="address"/></td></tr>
<tr><td>contact_no</td><td>:</td><td><input type="text" name="contact" id="contact"/></td></tr>
<tr><td align="center" colspan="3">
    <input type="submit" name="add" value="Add">
   </td></tr>
</table>
</form>
