<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="60%" align="center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Pass</th>
            <th>Create time</th>
            <th>Action</th>
        </tr>    
    <?php 
    require "connection.php";
    $selectQuery = "select * from users where 1";
    $result = $conn->query($selectQuery);
    echo $result->num_rows;
    //num_rows works with select query
    //affected_rows works with insert, update and delete
    if($result->num_rows){
        $html = "";
        while($row = $result->fetch_assoc()){
        $html .= "<tr>";  
        $html .= "<td>".$row['id']."</td>";  
        $html .= "<td>".$row['username']."</td>";  
        $html .= "<td>".$row['password']."</td>";  
        $html .= "<td>".$row['create_at']."</td>";  
        $html .= "<td>EDIT |DELETE </td>"; 
        $html .= "</tr>"; 
        }
        echo $html;
    }
    //always close the connection
        $conn->close();
    ?>
    </table>
</body>
</html>