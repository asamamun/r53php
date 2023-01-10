<?php
if(isset($_POST['upload'])){
$f = $_FILES['image'];
foreach ($f as $key => $value) {
    echo "$key: $value<br>";
}

$allowed = array("image/jpeg", "image/gif", "image/png",'image/webp');
// if(in_array($f['type'],$allowed) && $f['size'] < 512000){
if(in_array($f['type'],$allowed)){
    $name = rand(10000,99999)."_".time().".jpg";
    move_uploaded_file($f['tmp_name'],"files/".$name);
    $message = "upload complete";
}
else{
    $message = "sorry";
}
}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h3>input type file thakle obossoi enctype="multipart/form-data" form e thakte hobe and method post hote hobe</h3>
    <h4> <?= $message??"File Upload"; ?></h4>
    <div class="container">
        <form class="row g-3" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control" type="file" id="formFile" name="image" required accept="image/*;capture=camera">
            </div>
            <div class="mb-3">                
                <input class="btn btn-outline-primary" type="submit" name="upload" value="upload">
            </div>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>