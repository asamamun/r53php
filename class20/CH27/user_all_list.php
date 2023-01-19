<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 
    require "connection.php";
    $selectQuery = "select * from users where 1";
    $result = $conn->query($selectQuery);
    echo $result->num_rows;//num rows works with select query
    //affected rows works with insert, update and delete
    if($result->num_rows){
        
        while($row = $result->fetch_assoc()){
         echo "ID :" . $row['id'] . "<br>";   
         echo "Name :" . $row['username'] . "<br>";   
         echo "Create Time :" . $row['create_at'] . "<br>";         
         echo "<hr>"; 
        }
        
    }
    //always close the connection
        $conn->close();
    ?>
    </table>
</body>
</html>