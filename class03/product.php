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
for ($i=1; $i <= 100; $i++) { 
    echo '<a href="get-post.php?pid='.$i.'">'.$i.'</a> ';
}
    ?>
    
</body>
</html>