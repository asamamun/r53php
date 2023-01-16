<?php require "auth/auth.php" ?>

<?php 

    $imageName = $_GET['imageName'];

    if(file("uploadFiles/$imageName")){
        unlink("uploadFiles/$imageName");
        header("location: uploaded.php");
    }