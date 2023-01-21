<?php
require "db/connect.php";
//update button click code
if(isset($_POST['updateBtn'])){

    $name = $connect->escape_string($_POST['catname']);
    $desc = $connect->escape_string($_POST['catdesc']);
    $id = $_POST['id'];
    // var_dump($_FILES['caticon']);
    // exit;
    if($_FILES['caticon']['error'] == 0 ){
        $icon = $name.".png";
        move_uploaded_file($_FILES['caticon']['tmp_name'], "assets/images/caticon/".$icon);
        $updateQ = "update categories set name='".$name."',description='".$desc."',icon='".$icon."' where id='".$id."'";

    }
    else{
        $updateQ = "update categories set name='".$name."',description='".$desc."' where id='".$id."'";
    }
    $connect->query($updateQ);
    if($connect->affected_rows){
        header("Location:categories.php");
    }
    else{
        header("Location:categories.php");   
    }
}

//select
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "select * from categories where id ={$id} limit 1";
    $r = $connect->query($q);
    if($r->num_rows){
    $row = $r->fetch_assoc();
    }
    else{exit;}
}
else exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h1>Edit Category</h1>
    <div id="formContainer">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <div class="mb-3">
                    <label for="catname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="catname" name="catname" placeholder="category name" required value="<?= $row['name']?>">
                </div>
                <div class="mb-3">
                    <label for="catdesc" class="form-label">Description</label>
                    <textarea class="form-control" id="catdesc" name="catdesc" rows="3" required><?= $row['description']?></textarea>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-7">
                        <label for="caticon" class="form-label">Icon</label>
                    <input class="form-control" type="file" name="caticon" id="caticon">
                        </div>
                        <div class="col-5">
                            <img class="iconimage" src="assets/images/caticon/<?= $row['icon']?>" alt="">
                        </div>
                    </div>
                    
                </div>
                <input class="btn btn-outline-primary" type="submit" value="Update" name="updateBtn">
                
                <input class="btn btn-outline-danger" type="button" value="Back" name="back">
            </form>
        </div>
    </div>
</body>
</html>