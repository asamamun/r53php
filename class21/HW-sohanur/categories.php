<?php
require "db/connect.php";
if(isset($_POST['addBtn'])){
    $name = $connect->escape_string($_POST['catname']);
    $desc = $connect->escape_string($_POST['catdesc']);
    $icon = $name.".png";
    if(is_array($_FILES['caticon'])){
        move_uploaded_file($_FILES['caticon']['tmp_name'], "assets/images/caticon/".$icon);
    }
    $insertQ = "insert into categories values(null,'".$name."','".$desc."','".$icon."',current_timestamp())";
    $connect->query($insertQ);
    if($connect->affected_rows){
        header("Location: {$_SERVER['PHP_SELF']}");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body onload="run()">
    <div class="container">
        <?php require "inc/navbar.php" ?>
        <hr>
        <h1>Category Management</h1>
        <div class="d-flex justify-content-between">
            <div>
        <a href="javascript:void(0)" onclick="toggleForm()" class="btn btn-lg btn-outline-info"><i class="bi bi-file-plus"></i></a>
        <?php if(isset($_GET['search'])) { ?>
        <span>Search result for <?=$_GET['search'] ?></span>
        <?php } ?>
        </div>
        <form action="" class="d-flex">
            <input type="search" class="form-control" name="search" id="search">
            <input type="submit" class="ms-1 btn btn-outline-success" value="Search">
        </form>
        </div>
        
        <div id="formContainer">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="catname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="catname" name="catname" placeholder="category name" required>
                </div>
                <div class="mb-3">
                    <label for="catdesc" class="form-label">Description</label>
                    <textarea class="form-control" id="catdesc" name="catdesc" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="caticon" class="form-label">Icon</label>
                    <input class="form-control" type="file" name="caticon" id="caticon">
                </div>
                <input class="btn btn-outline-primary" type="submit" value="Add" name="addBtn">
                <input class="btn btn-outline-warning" type="reset" value="Clear" name="clearBtn">
                <input class="btn btn-outline-danger" type="button" value="Close" onclick="closeForm()" name="closeBtn">
            </form>
        </div>
        <hr>
        <div id="tableContainer">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Create Time</th>
                    <th>Action</th>
                </tr>
                <?php
                if(isset($_GET['search'])){
                    $s = $connect->escape_string($_GET['search']);
                    $selectQ = "select * from categories where name like '%".$s."%'";
                    // echo $selectQ;
                }
                else{
                    $selectQ = "select * from categories where 1";
                }
                
                //do the code generation
                $records = $connect->query($selectQ);
                // echo $records->num_rows; exit;
                // while($row = $records->fetch_assoc()){
                while($row = $records->fetch_array(MYSQLI_ASSOC)){
                    echo "<tr>";                    
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "<td><img class='iconimage' src='assets/images/caticon/".$row['icon']."' /></td>";
                    echo "<td>".$row['created_at']."</td>";
                    echo "<td><a href='categories-edit.php?id=".$row['id']."'><i class='bi bi-pencil-square'></i></a> | <a onclick='return confirm(\"Are you sure you want to delete this item?\");' href='categories-delete.php?id=".$row['id']."'><i class='bi bi-trash'></i></a></td>";
                    echo "</tr>";
                }
                $records->free();
                ?>
            </table>
        </div>
    </div>
    <script>
function run(){
    document.getElementById("formContainer").style.display = "none";
}
    function toggleForm(){
        if(document.getElementById("formContainer").style.display == "none"){
            document.getElementById("formContainer").style.display = "block";
        }
        else{
            document.getElementById("formContainer").style.display = "none";
        }
    }

    function closeForm(){
        document.getElementById("formContainer").style.display = "none";
    }

    </script>
</body>

</html>