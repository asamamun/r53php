<?php
if(isset($_POST['upload'])){
move_uploaded_file($_FILES['fname']['tmp_name'],"files/".$_FILES['fname']['name']);
$messaeg="Uploaded!!!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>File upload: <?php echo isset($messaeg)?$messaeg:"";?></h1>
    <fieldset>
        <legend>File</legend>
        <form action="" method="post" enctype="multipart/form-data">
        <label style="padding: 5px; border:2px solid gray" for="fname">Select File</label>
        <input type="file" name="fname" id="fname" required style="display:none">
        <hr>
        <input type="submit" value="upload" name="upload">
    </form>
    </fieldset>
</body>
</html>