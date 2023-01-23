<?php
/*
CREATE TRIGGER `au_reassign_ticket` AFTER UPDATE ON `technicians` FOR EACH ROW BEGIN
IF NEW.available = 0 THEN
UPDATE tickets SET tech_id='Unavailable' WHERE tech_id=NEW.id;
END IF;
IF NEW.available = 1 THEN
UPDATE tickets SET tech_id=NEW.id WHERE tech_id='Unavailable' limit 5;
END IF;
END
*/
/*
DELIMITER $$
CREATE TRIGGER `au_reassign_ticket` AFTER UPDATE ON `technicians` FOR EACH ROW BEGIN
IF NEW.available = 0 THEN
UPDATE tickets SET tech_id='Unavailable' WHERE tech_id=NEW.id;
END IF;
IF NEW.available = 1 THEN
UPDATE tickets SET tech_id=NEW.id WHERE tech_id='Unavailable' limit 5;
END IF;
END
$$
DELIMITER ;
*/
$message = "Update Your Profile";
require "database.php";
if(isset($_POST['update']) && !empty($_POST['username'])){
	$userid = $_POST['username'];
	list($un,$uid) = explode("#",$userid);
	//$userinfo = explode("#",$userid);
	$userchoice = $_POST['user_availability'];
	$updateQuery = "update technicians set available='$userchoice' where id='$uid'";
	$mysqli->query($updateQuery);
	if($mysqli->affected_rows == 1){
		$message = "profile updated for user " . $un;
		}
	else {
		$message = "Update Failed. Contact With manager";
		}	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h3><?php echo $message; ?></h3>

<form method="post">
Select your user name: <select name="username">
<option value=""></option>
<?php 
$selectQuery = "select * from technicians where id != '4'";
$selectQueryResult = $mysqli->query($selectQuery);
while($row = $selectQueryResult->fetch_array(MYSQLI_ASSOC)){
	echo "<option value='".$row['name']."#".$row['id']."'>".$row['name']."-".$row['id']."</option>\n";
	}
?>
</select>
<br>
Available:
<input type="radio" name="user_availability" value="1"/>Yes
<input type="radio" name="user_availability" value="0"/>No
<br>
<input type="submit" name="update" value="Update Profile"/>
</form>
<hr>
<h3>Users/Tickets</h3>
<table width="100%" border="5">
	<tr>
		<td>ID</td>
		<td>Username</td>
		<td>Title</td>
		<td>Description</td>
		<td>Technician ID</td>		
	</tr>
	<?php
$selectTicket = "select * from tickets where 1";
$selectTicketResult = $mysqli->query($selectTicket);
if($selectTicketResult->num_rows > 0){
	while($row = $selectTicketResult->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['title']."</td>";
		echo "<td>".$row['description']."</td>";
		echo "<td>".$row['tech_id']."</td>";
		echo "</td>";
	}
}
	?>
</table>
</body>
</html>